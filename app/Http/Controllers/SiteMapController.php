<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;

	use App;
	use App\Http\Requests;
	use App\Http\Controllers\Controller;
	use App\Models\News;
	use App\Models\Pages;
	use App\Models\Shares;
	use App\Models\Sites;
	use App\Models\Articles;
	use App\Models\Specialisty;
	use App\Models\Album;
	use App\Models\VideoAlbum;
	use App\Models\Feedback;
	use App\Models\Reviews;
	use App\Models\QuestAnswer;
	use App\Models\Category;
	use App\Models\Goods;
	use URL;
	use DB;
	use Carbon\Carbon;

	class SiteMapController extends Controller
	{
		public function index($sitename, $sitedomen)
		{
			$getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();

			//dd($getSites->domen);

			// create new sitemap object
			$sitemap = App::make("sitemap");

			// set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
			// by default cache is disabled
			$sitemap->setCache('laravel.sitemap' . $getSites->domen, 60);
			if (!$sitemap->isCached()) {


				//Главная
				$sitemap->add('http://' . $getSites->domen);

				//Контакты
				$sitemap->add('http://' . $getSites->domen . '/' . (new Feedback())->SlugName);

				//Отзывы
				$reviews = $getSites->getReviews()->get();
				if ($reviews->count() > 0) {
					$sitemap->add('http://' . $getSites->domen . '/' . (new Reviews())->SlugName);
				}


				//Вопрос-ответ;
				if (QuestAnswer::whereRaw('ids = ? and publish = ?',
						[Sites::where('domen', '=', $getSites->domen)->first()->id, TRUE])
						->orderBy('id', 'desc')->get()->count() > 0
				) {
					$sitemap->add('http://' . $getSites->domen . '/' . (new QuestAnswer())->SlugName);
				}


				//Страницы
				$pages = $getSites->getPages()->get();
				foreach ($pages as $value) {
					try {
						$sitemap->add('http://' . $getSites->domen . '/' . $value->SlugName . "/" . $value->id, Carbon::now($value->update_at)->toAtomString());
					} catch (\Exception $e) {
					}
				}


				//Новости
				$news = $getSites->getNews()->get();
				if ($news->count() > 0) {
					$sitemap->add('http://' . $getSites->domen . '/' . (new News())->SlugName);
				}
				foreach ($news as $value) {

					try {
						$sitemap->add('http://' . $getSites->domen . '/' . $value->SlugName . "/" . $value->id, $value->updated_at->toAtomString());
					} catch (\Exception $e) {
					}
				}


				//Акции
				$shares = $getSites->getShares()->get();
				if ($shares->count() > 0) {
					$sitemap->add('http://' . $getSites->domen . '/' . (new Shares())->SlugName);
				}
				foreach ($shares as $value) {
					try {
						$sitemap->add('http://' . $getSites->domen . '/' . $value->SlugName . "/" . $value->id, $value->updated_at->toAtomString());
					} catch (\Exception $e) {
					}
				}


				//Статьи
				$art = $getSites->getArts()->get();
				if ($art->count() > 0) {
					$sitemap->add('http://' . $getSites->domen . '/' . (new Articles())->SlugName);
				}
				foreach ($art as $value) {
					try {
						$sitemap->add('http://' . $getSites->domen . '/' . $value->SlugName . "/" . $value->id, $value->updated_at->toAtomString());
					} catch (\Exception $e) {
					}
				}


				//Специалисты
				$team = $getSites->getTeam()->get();
				if ($team->count() > 0) {
					$sitemap->add('http://' . $getSites->domen . '/' . (new Specialisty())->SlugName);
				}
				foreach ($team as $value) {
					try {
						$sitemap->add('http://' . $getSites->domen . '/' . $value->SlugName . "/" . $value->id, $value->updated_at->toAtomString());
					} catch (\Exception $e) {
					}
				}

				//Галегея
				$photo = $getSites->getAlbums()->get();
				if ($team->count() > 0) {
					$sitemap->add('http://' . $getSites->domen . '/' . (new Album())->SlugName);
				}
				foreach ($photo as $value) {
					try {
						$sitemap->add('http://' . $getSites->domen . '/' . $value->SlugName . "/" . $value->id, $value->updated_at->toAtomString());
					} catch (\Exception $e) {
					}
				}
				$video = $getSites->getVideoAlbums()->get();
				if ($video->count() > 0) {
					$sitemap->add('http://' . $getSites->domen . '/' . (new VideoAlbum())->SlugName);
				}
				foreach ($video as $value) {
					try {
						$sitemap->add('http://' . $getSites->domen . '/' . $value->SlugName . "/" . $value->id, $value->updated_at->toAtomString());
					} catch (\Exception $e) {
					}
				}

				//услуги


				if ($sitename != 'stomzn48') {
					$goods = $getSites->getGoods()->get();
					foreach ($goods as $value) {
						try {
							$sitemap->add('http://' . $getSites->domen . '/' . $value->SlugName . "/" . ($value->slug ? $value->slug : $value->id), $value->updated_at->toAtomString());
						} catch (\Exception $e) {
						}

					}
				} else {
					$category = $getSites->getCategory()->get();
					foreach ($category as $value) {
						try {
							$sitemap->add('http://' . $getSites->domen . '/' . $value->SlugName . "/" . ($value->slug ? $value->slug : $value->id), $value->updated_at->toAtomString());
						} catch (\Exception $e) {
						}

					}
				}


				//Комплексные услуги

				$complex = $getSites->getComplexGoods()->get();
				foreach ($complex as $value) {
					try {
						$sitemap->add('http://' . $getSites->domen . '/' . (new Goods())->SlugName . '/' . $value->SlugName . "/" . ($value->slug ? $value->slug : $value->id), $value->updated_at->toAtomString());
					} catch (\Exception $e) {
					}
				}


			}

			return $sitemap->render('xml');

		}
	}
