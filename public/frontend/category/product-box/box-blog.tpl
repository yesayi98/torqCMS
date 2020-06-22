<article class="single_blog">
    <figure>
        <div class="blog_thumb">
            <a href="{url url='blog/detail?a='|cat:$blog.id}"><img src="{$blog.image.path}" alt="{$blog.name}"></a>
        </div>
        <figcaption class="blog_content">
           <div class="articles_date">
                 <p>{$blog.created_date}</p>
            </div>
            <h4 class="post_title"><a href="{url url='blog/detail?a='|cat:$blog.id}">{$blog.name|truncate}</a></h4>
            <footer class="blog_footer">
                <a href="{url url='blog/detail?a='|cat:$blog.id}">{translator selector="viewMore"}</a>
            </footer>
        </figcaption>
    </figure>
</article>
