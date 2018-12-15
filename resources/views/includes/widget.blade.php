@inject('widgetPost', 'App\Post')

<div class="col-lg-4 sidebar-widgets">  
    <div class="widget-wrap">
        <div class="single-sidebar-widget popular-post-widget">
            <h4 class="popular-title">Berita Terkini</h4>
            <div class="popular-post-list">
                @foreach ($widgetPost->orderBy('created_at', 'desc')->get() as $p)
                <div class="single-post-list d-flex flex-row align-items-center">
                    <div class="thumb">
                        <img style="width:100px" src="{{ asset('storage/' . $p->photo ) }}" alt="">
                    </div>
                    <div class="details">
                        <a href="{{ route('frontEnd.n_details', ['post' => $p->id]) }}"><h6>{{ $p->title }}</h6></a>
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
                                    
    </div>
</div>