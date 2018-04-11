add_action( 'transition_post_status', 'send_mails_on_publish', 10, 3 );

function send_mails_on_publish( $new_status, $old_status, $post )
{
 $email= get_post_meta($post->ID);
    if ( 'publish' == $new_status and 'publish' !== $old_status and 'wpcr3_review' == get_post_type( $post )){
    
    $to = $email['wpcr3_review_email'][0];
 $subject = 'done';
 $message = '
 <p>It\'s great to hear from you!</p>
 <p>Thank you for submitting a review for our website!</p>
 <p>We appreciate your review and love hearing from our puppies!</p>
 <p>If you have more time on your hands, click here to submit a review on our Google page ;-) and link to: <a href="https://www.google.com/maps/place/Roche\'s+German+Shepherds/@42.831505,-88.5052317,17z/data=!3m1!4b1!4m7!3m6!1s0x0:0x50701a2e86dcef3!8m2!3d42.831505!4d-88.503043!9m1!1b1?hl=en">https://www.google.com/maps/place/Roche\'s+German+Shepherds/@42.831505,-88.5052317,17z/data=!3m1!4b1!4m7!3m6!1s0x0:0x50701a2e86dcef3!8m2!3d42.831505!4d-88.503043!9m1!1b1?hl=en</a></p>

 ';
 $headers = array('Content-Type: text/html; charset=UTF-8');

 wp_mail( $to, $subject, $message, $headers );
}
}
