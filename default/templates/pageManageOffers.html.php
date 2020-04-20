<div style="width: 100%;">

    <div style="margin:auto;margin-top:40px;margin-bottom:40px;width:50%;display:flex;">

        <div class="div-button selected-button" onClick="switchButton();">

            <h2 style="text-align: center;">Set Offer</h2>

        </div>

        <div class="div-button" onClick="switchButton();">

            <h2 style="text-align: center;">Remove Offers</h2>

        </div>

    </div>

</div>

<script>
    function switchButton(){
        var buttons = document.getElementsByClassName("div-button");
        for(i=0;i<2;i++){
            buttons[i].classList.toggle("selected-button");
        }
        console.log(buttons);
    }
</script>