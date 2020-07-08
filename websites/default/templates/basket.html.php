<style>
#pull-out{

    position: fixed;
    z-index: 1;
    right: 0;
    top: 17em;
    height: 50%;
    width: 300px;
    max-width: 350px;
    background-color:  #c93d67;
    box-sizing: border-box;
    padding:10px;
    color: black;
    border-style: solid;
    border-color:black;
    transition: .6s;
    margin-right: -300px;
    
}

#pull-out.hidden {
    margin-right: 0px;
}

#pull-out button.nav-toggle {
    position: absolute;
    content:url(images/basket.png);
    left: -65px;
    top:9.8em;
    width: 65px;
    height: 65px;
    background-color:  #c93d67;
    border-radius: 30px 30px 30px 30px;
    border-style: solid;
    border-color:black;

}

#pull-out .pressed{
    margin-right:0;
}

div.table {
    display: table;
    width: 100%;
}
form.tr, div.tr
{
    display: table-row;

}
span.td
{
    display: table-cell;
    padding: 0 5px;
}
</style>








<div id="pull-out" <?php if(isset($_POST['basket_id'])) echo 'class="hidden"';?>>
    <div style="margin-right: 14em; margin-top: 0em; padding: 0 16.2em 6px 15px;border-width: 2.5px; border-color: black; border-style:solid; background-color: white;">
            <h4 style="margin-top: 12px; margin-right: 30px; color: black; text-decoration: underline;">BASKET</h4>
            <div class="table">
                <div class="tr">
                    <span class="td" style="color: black;">Product</span>
                    <span class="td" style="color: black;">Quantity</span>
                    <span class="td" style="color: black;">Gift</span>
                    <span class="td" style="color: black;">Price</span>
                </div>

                <?php
                    $total = 0;
                    $productTable = new DatabaseTable('products',null);
                    foreach($_SESSION['basket'] as $name => $item){
                        $product = $productTable->find('product_id',$item['product_id'])[0]; ?>
                        <!--https://stackoverflow.com/questions/4035966/create-a-html-table-where-each-tr-is-a-form/15600151#15600151-->
                        <div class="tr">
                            <span class="td" style="color: black;"><?=$product['product_name']?></span>
                        
                            <span class="td">
                                <form class="tr" action="<?=$_SERVER['REQUEST_URI']?>" method="POST"> 
                                    <input type="hidden" name="basket_id" value="<?=$name?>">
                                    <span class="td"><input type="submit" name="-" value="-" /></span>
                                    <span class="td" style="color: black;"><?=$item['quantity']?></span>
                                    <span class="td"><input type="submit" name="+" value="+" /></span>
                                </form>
                            </span>

                        
                            <span class="td">
                                <form class="tr" action="<?=$_SERVER['REQUEST_URI']?>" method="POST"> 
                                    <input type="hidden" name="basket_id" value="<?=$name?>">
                                    <span class="td"><input type="submit" name="gift" value=" <?php
                                        if($item['gift']){
                                            echo '&#x2714';
                                        }
                                        else{
                                            echo '  ';
                                        }
                                    ?> "/></span>
                                </form>
                            </span>


                            <?php
                                $price = $item['quantity'] * $product['product_price'];
                                $total = $total + $price;
                            ?>
                            <span class="td" style="color: black;">£<?=$price?></span>

                        </div>
                    <?php } 
                ?>
            </div>

            <div style="margin-top: 30px;">
                <h4 style=" color: black;">TOTAL: £<?=$total?></h4>
                <form action="/checkout" method="POST">
                    <input type="submit" name="checkout" value="Checkout" style="margin-right: -10.5em; margin-top: -2.3em; float:top; float: right; padding: 9px 2.1em 0.7em 0px; border-radius: 8em 8em 8em 8em;  text-indent: 25%; border-color: black; border-style:solid; background-color:#c93d67; font-size:x-large; color: #ffff;">
                </form>
            </div>
    </div>
      
    <button onclick="myFunction()" class="nav-toggle"><img src="/images/basket.png" style="max-width: 100%;border-radius: 50%;"></i></section></button>

</div>

<script>
function myFunction() {
  document.getElementById("pull-out").classList.toggle("hidden");
}
</script>

