<ul class="list-group list-group-flush">
  {foreach from=$reviews.data item=$review key=$key}
    <li class="list-group-item bg-transparent">
      <div class="media align-items-center">
        <img src="{$review.product.images.0.thumbnails.0.thumb_path}|" alt="user avatar" class="customer-img rounded-circle">
        <div class="media-body ml-3">
          <h6 class="mb-0">{$review.product.name}<small class="ml-4">{$review.added_in}</small></h6>
          <div class=" d-flex justify-content-between mr-3">
            <p class="mb-0 small-font"><a href="{url url="backend/users/detail?u="|cat:$review.user_id}">{$review.user.name} {$review.user.lastname}</a>: {$review.comment}</p>
            {if $review.active == 0}
              <form class="form-group" action="{url url="backend/reviews/save"}" data-ajaxsend="true" method="post">
                <input type="hidden" name="id" value="{$review.id}">
                <input type="hidden" name="comment" value="{$review.comment}">
                <input type="hidden" name="user_id" value="{$review.user_id}">
                <input type="hidden" name="rating" value="{$review.rating_count}">
                <input type="hidden" name="article_id" value="{$review.article_id}">
                <input type="hidden" name="active" value="1">
                <button type="submit" class="btn btn-success" name="button">Submit</button>
              </form>
            {/if}
          </div>
        </div>
        <div class="star">
          {$lightStarsCount = 5 - $review.rating_count}
          {'<i class="zmdi zmdi-star"></i>'|str_repeat:$review.rating_count}
          {'<i class="zmdi zmdi-star text-light"></i>'|str_repeat:$lightStarsCount}
        </div>
      </div>
    </li>
  {/foreach}
 </ul>
