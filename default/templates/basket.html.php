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
}
</style>

<div id="pull-out">
      <div style="margin-right: 14em; margin-top: 0em; padding: 0 16.2em 6px 15px;border-width: 2.5px; border-color: black; border-style:solid; background-color: white;"></style>
      <h4 style="margin-top: 12px; margin-right: 30px; color: black; text-decoration: underline;">BASKET</h4>
        <div>
    <?php
        $productTable = new DatabaseTable('products',null);
        foreach($_SESSION['basket'] as $name => $item){
            $product = $productTable->find('product_id',$item['product_id'])[0];?>
            <!--https://stackoverflow.com/questions/4035966/create-a-html-table-where-each-tr-is-a-form/15600151#15600151-->
            <div class="table">
                <div class="tr">
                    <span class="td"><?=$product['product_name']?></span>
                    <span class="td"></span>
                        <form class="tr" action=""http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']" method="POST"> 
                            <span class="td"><input type="hidden" name="basket_id" value="<?=$name?>"></span>
                            <span class="td"><input type="submit" name="+" value="+" /></span>
                            <span class="td"><?=$item['quantity']?></span>
                            <span class="td"><input type="submit" name="-" value="-" /></span>
                        </form> 
                </div>
            </div>
        <?php
        }
    ?>
        </div>
      <h4 style="margin-top: 18.5em; margin-right: 30px; color: black;">TOTAL:</h4>
      <button style="margin-right: -10.5em; margin-top: -2.3em; float:top; float: right; padding: 9px 2.1em 0.7em 0px; border-radius: 8em 8em 8em 8em;  text-indent: 25%; border-color: black; border-style:solid; background-color:#c93d67; font-size:x-large; color: #f2b662;">Checkout</button>
      </div>
      
      <button onclick="myFunction()" class="nav-toggle">Click me</button>
      
</div>

<p id="demo"></p>

<script>
function myFunction() {
  document.getElementById("pull-out").classList.toggle("hidden");
}
</script>

