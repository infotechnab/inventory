<!DOCTYPE HTML>
<html>
    <head>
        
    </head>
    <body>
          <p>
                    <?php echo 'Welcome '.$this->session->userdata ('email').' '.'|'; ?>
                    <?php echo anchor('defaultview/logout','Log Out') ?>
                </p>
        <h1>Welcome to the Inventory</h1>
        <?php echo anchor('defaultview/product_entry','Add New Product'); ?>
    </body>
</html>