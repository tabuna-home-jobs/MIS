<?php namespace App\Providers;

use App\Models\Category;
use App\Models\Goods;
use App\Models\Observer\GoodsObserver;
use App\Models\Observer\QuestAnswerObserver;
use App\Models\QuestAnswer;
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

//ОБсерверы!
//!обсерверы

class EventServiceProvider extends ServiceProvider
{

    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'event.name' => [
            'EventListener',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        Goods::observe(new GoodsObserver);
        QuestAnswer::observe(new QuestAnswerObserver);
    }
}
