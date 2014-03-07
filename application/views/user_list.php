<!DOCTYPE HTML>
<html>
    <head>
        <style>
            #listTable{
                padding: 10px;
                margin: 0 auto 0 auto;
                text-align: center;
                background-color: #ccc;
            }
            
            .listData{
                padding: 3px;
                margin: 5px;
            }
            #heading{
                text-align: center;
            }
        </style> 
    </head>
    <body>
        <h1 id="heading">User Information</h1>
        <?php if(isset($query)){
      ?>
        <table id="listTable">
            <tr class="listRow">
                <th> S.No </th>
                <th> Email Address</th>
                <th>IP Address</th>
                <th>Country</th>
                <th>City</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Browser</th>
                <th>Operating System</th>
            </tr>
            <?php foreach ($query as $data){ ?>
            <tr class="listRow">
                <td class="listData"><?php echo $data->id; ?></td>
                <td class="listData"><?php echo $data->email; ?></td>
                <td class="listData"><?php echo $data->ip;?></td>
                <td class="listData"><?php echo $data->country; ?></td>
                <td class="listData"><?php echo $data->city; ?></td>
                <td class="listData"><?php echo $data->latitude;?></td>
                <td class="listData"><?php echo $data->longitude;?></td>
                <td class="listData"><?php echo $data->browser;?></td>
                <td class="listData"><?php echo $data->operating_system;?></td>
            </tr>
       
         <?php
     }
        } ?>
             </table>
    </body>
</html>