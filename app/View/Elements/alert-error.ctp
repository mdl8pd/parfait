<div class="alert alert-error">
    <button type="button" class="close" data-dismiss="alert">&times;</button> 
    <strong>Error! </strong>
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
