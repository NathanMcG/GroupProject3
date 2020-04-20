<div style="width: 100%;display: flex;margin-top: 50px;margin-bottom: 50px;">


    <div class="lastOrder-form" style="flex-grow:1;">

        <p>Filter</p>

        <form action="/" method="GET" id="admin_user_form">

            <div class="inner-form">
                <input type="hidden" name="page" value="manageAdmins">
                <label>Type:</label>
                <div class="inner-radioBtn">
                    <label for="admin">Admin</label>
                    <input type="radio" id="admin_user" name="filter" value="Admins" <?php if(isset($_GET['filter'])){ if($_GET['filter'] == 'Admins'){ echo 'checked'; }} else{ echo 'checked'; }?>>
                    <label for="admin_user">User</label>
                    <input type="radio" id="admin_user" name="filter" value="Users" <?php if(isset($_GET['filter'])){ if($_GET['filter'] == 'Admins'){ echo 'checked'; }}?>/>
                </div>
            </div>

            <div class="inner-formBtn">
                <input type="submit" name="submit" value="Submit" />
            </div>

        </form>

    </div>

    <div class="lastOrder-form" style="flex-grow:1;">

        <p>Search by User</p>

        <form action="" method="GET">
            <input type="hidden" name="page" value="manageAdmins">
            <div class="inner-form">
                <label for="firstname">Email: </label>
                <input type="text" name="filter" id="email" value="" required />
            </div>

            <div class="inner-formBtn">
                <input type="submit" name="submit" value="Submit" />
            </div>
        </form>
    </div>

</div>

<script>
    document.getElementById("admin_user").onclick = function() {
        this.form.submit();
    };
</script>
