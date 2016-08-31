<?php namespace App\Models\Observer;
	class SlugGenerateObserver
	{
		public function saving($model)
		{
			$slug = $model->scopeGetSlug();
				$model->slug = str_slug($model->$slug, '-');
		}
	}
