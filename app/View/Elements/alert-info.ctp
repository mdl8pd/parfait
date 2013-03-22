<div class="alert alert-info"> 
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo $message;
    if (isset($validation))
        {
            echo '<ul>';
            foreach($validation as &$field)
            {
                foreach($field as &$message)
                {
                    echo '<li>';
                    echo $message;
                    echo '</li>';
                }
            }
            echo '</ul>';
        }
     ?>
</div>
