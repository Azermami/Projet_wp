<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
        <?php
        $comment_count = get_comments_number();
        $title = esc_html__('Comments', 'textdomain'); // Texte statique pour "Comments"

        if ('1' === $comment_count) {
            $title .= ' (1)'; // Cas pour un seul commentaire
        } else {
            $title .= sprintf(' (%s)', number_format_i18n($comment_count)); // Cas pour plusieurs commentaires
        }

        // Afficher le titre avec le nombre de commentaires
        echo $title;
        ?>
    </h2><!-- .comments-title -->

        <ul class="comment-list">
        <?php
        wp_list_comments(array(
            'style'      => 'ul',  
            'callback'   => 'my_custom_comment_format',
        ));
        ?>
        </ul><!-- .comment-list -->

        <?php

        if (!comments_open()) :
            ?>
            <p class="no-comments"><?php esc_html_e('Comments are closed.', 'textdomain'); ?></p>
        <?php
        endif;

    endif; // Check for have_comments().

    ?>

    <!-- Your Custom Comment Form -->
    <div id="custom-comment-form">
        <h2 id="comment-form-title">
            Leave a reply
        </h2>
        <p class="commentToReply"></p>
        <form method="post" action="" class="formComment">
            <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>" />
            <input type="hidden" id="comment_parent" name="comment_parent" value="<?php echo $reply_to; ?>" />
            <input type="text" id="fullname" name="fullname" required placeholder="Full name">

            <textarea id="comments" name="comment" required placeholder="Message"></textarea>

            <input type="submit" value="Submit">
            <button type="button" id="cancel-reply-button" style="display: none;">Reset</button>
        </form>
    </div><!-- #custom-comment-form -->

</div><!-- #comments -->

<script type="text/javascript">
    document.querySelectorAll('[data-comment]').forEach((elem)=>{
        elem.addEventListener('click', function(e){
            e.preventDefault();
            document.getElementById('comment_parent').value = this.getAttribute('data-comment');
            document.getElementById('comment-form-title').innerText = 'Reply to Comment by ' + this.getAttribute('data-author');
            document.querySelector('.commentToReply').innerText = this.parentElement.previousElementSibling.textContent;
            document.getElementById('cancel-reply-button').style.display = 'inline-block';
        });
    });
document.getElementById('cancel-reply-button')?.addEventListener('click', function() {
    document.getElementById('comment_parent').value = 0;
    document.getElementById('comment-form-title').innerText = 'Leave a reply';
    document.querySelector('.commentToReply').innerText = '';
    this.style.display = 'none'; 
});
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('comment_submitted')) {
        document.querySelector('#comments').scrollIntoView({ behavior: 'smooth' });
    }
});
</script>
