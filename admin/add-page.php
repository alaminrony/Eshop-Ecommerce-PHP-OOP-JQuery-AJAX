<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php

   $pg =new Page();
    if($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST['submit'])){
     $insertPage = $pg->PageInsert($_POST);
  }

?>



        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Page</h2>
                <div class="block">  

                <?php
                  if(isset($insertPage)){
                    echo $insertPage;

                  }


                ?>               
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Page Name</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Page name..." name="page_name" class="medium" />
                            </td>
                        </tr>
                     
                        
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="page_content"></textarea>
                            </td>
                        </tr>
						

                        <tr>
                            <td>
                                <label>Description</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Page name..." name="description" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Keywords</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Page name..." name="keywords" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Create Page" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>

        <!-- Load TinyMCE -->
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
     <!-- Load TinyMCE -->

<?php include 'inc/footer.php';?>



 




