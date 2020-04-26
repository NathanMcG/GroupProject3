<div style="width: 100%;display: flex;margin-top: 50px;margin-bottom: 50px;">


    <div class="lastOrder-form" style="flex-grow:1;">

        <p>Filter</p>

        <form action="/manageAdmins/" method="GET" name="admin">

            <div class="inner-form">
                <label>Type:</label>
                <div class="inner-radioBtn">
                    <label for="admin">Admin</label>
                    <input type="radio" id="admin_user" name="filter" value="Admins" onClick="submitForm();" <?php if(isset($_GET['filter'])){ if($_GET['filter'] == 'Admins'){ echo 'checked'; }} else{ echo 'checked'; }?>>
                    <label for="admin_user">User</label>
                    <input type="radio" id="admin_user" name="filter" value="Users" onClick="submitForm();" <?php if(isset($_GET['filter'])){ if($_GET['filter'] == 'Users'){ echo 'checked'; }}?>/>
                </div>
            </div>


        </form>

    </div>

    <div class="lastOrder-form" style="flex-grow:1;">

        <p>Search by User</p>

        <form action="/manageAdmins/" method="GET">
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
    function submitForm(){
        document.admin.submit();
    };
</script>
