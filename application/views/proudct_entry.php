<!DOCTYPE HTML>

<html>
    <head>
         <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
//]]>
</script>
<style>
    .productDiv{
        width: 100%;
    }
    .addProductDiv{
        width: 60%;
        margin: 0 auto 0 auto;
        background-color: #E8E8E6;
    }
    .title{
        text-align: center;
    }
</style>

    </head>
   
    <body>
         <p>
                    <?php echo 'Welcome '.$this->session->userdata ('email').' '.'|'; ?>
                    <?php echo anchor('defaultview/logout','Log Out') ?>
                </p>
        <div class="productDiv">
            <div class="addProductDiv">
        <h2 class="title">New Product</h2>
        <?php echo form_open('defaultview/addproduct'); ?>
        <table>
            <tr>
                <th>Product Name</th>
                <td> <input class="pro_inpText" type="text" name="productName" placeholder="product name" /></td>
            </tr>
            <tr>
                <th>Product type</th>
                <td> <select class="pro_inpText" name="productType">
            <option value="0"> Select Product Type</option>
            <?php foreach ($prdtype as $plist)
            { ?>
                <option value="<?php echo $plist->p_type_id; ?>"> <?php echo $plist->p_type_name; ?></option>
            <?php }?>
        </select></td>
            </tr>
            <tr>
                <th>Supplier</th>
                <td><select class="pro_inpText" name="supplierName">
            <option value="0"> Select Supplier</option>
            <?php foreach ($suplierList as $slist)
            { ?>
                <option value="<?php echo $slist->s_id; ?>"> <?php echo $slist->s_type; ?></option>
            <?php }?>
        </select></td>
            </tr>
            <tr>
            <th>Product Description</th>
            <td><textarea name="area2" placeholder="Description" cols="50" rows="5" class="pro_inpText" ></textarea></td>
        </tr>
        <tr>
            <th>Tags</th>
            <td><input  type="text" name="tag" placeholder="tag name" class="pro_inpText"/></td>
        </tr>
        <tr>
            <th>Initial Stock</th>
            <td><input type="text" name="stock" placeholder="1" class="pro_inpText"/></td>
        </tr>
         <tr>
            <th>SKU</th>
            <td><input type="text" name="sku" placeholder="SKU" class="pro_inpText"/></td>
        </tr>
        <tr>
            <th>Buy Price</th>
            <td><input type="text" name="buyPrice" placeholder="0.0" class="pro_inpText"/></td>
        </tr>
        <tr>
            <th>Wholesale Price</th>
            <td><input type="text" name="wholeshalePrice" placeholder="0.0" class="pro_inpText"/></td>
        </tr>
        <tr>
            <th>Retailer Price</th>
            <td><input type="text" name="retailPrice" placeholder="0.0" class="pro_inpText"/></td>
        </tr>
        
        </table>
       <input type="submit" value="Save" />
        <input type="reset" value="Clear" />
        <?php echo form_close(); ?>
        </div>
        </div>
    </body>
</html>
