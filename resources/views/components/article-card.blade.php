<li class="clearfix">
    <div class="boxes_image">
        <a itemprop="url" href="{{ $article_url }}"><img width="539" height="303"
                src="{{ $image_url }}" class="attachment-latest_post_boxes size-latest_post_boxes wp-post-image"
                alt=""></a>
    </div>
    <div class="latest_post">
        <div class="latest_post_text">
            <div class="latest_post_inner">
                <div class="latest_post_text_inner">
                    <h5 itemprop="name" class="latest_post_title entry_title">
                        <a itemprop="url" href="{{ $article_url }}">{{ $title }}</a>
                    </h5>
                    <p itemprop="description" class="excerpt">&nbsp; {{ $slot }}</p>
                </div>
            </div>
        </div>
    </div>
</li>