<script type="text/html" id="userLoginTemplate">
    <div>
        <form id="userLoginForm" method="post" action="">
        <label>User Name:</label><input type="text" class="username" name="username">
        <label>Password :</label><input type="password" class="password" name="password">
        <span style="display:none" id='loginError'>Username or password is wrong</span>
        </form>
        <button id="userLoginBtn">Login</button>
        <button id="userRegistrationBtn">Registration</button>
    </div>
</script>

<script type="text/html" id="dashboardTemplate">
    <div>
      <h3> Dashboard </h3>
        <input type="hidden" id="userId" value="<%= userId%>" />
        <a href="javascript:void(0)" id="createAlbum" >Create Album</a>
        <a href="javascript:void(0)" id="seeList" >List Of album</a>
    </div>
</script>

<script type="text/script" id="createAlbumTemplate">
    <form id="createAlbumForm" method="post" action="">
    <input type="text" id="albumName" name="albumName">
    </form>
    <button id="createAlbumBtn">Create</button>
</script>

<script type="text/script" id="addPhoto">
    <form id="addPhotoForm" method="post" action="" enctype="multipart/form-data">


        <div id="fine-uploader"></div>
    </form>
    <button class="addmorePhotoBtn">Add More Photo</button>

</script>

<script type="text/script" id="albumListTemplate">
    <ol>

    <% _.each(albums, function(album){ %>

<li><a href="javascript:void(0)" class="albumList" id="<%= album.id%>"><img src="<%= album.photo%>" height="100" width="100"><span class='<%=album.id %>editAlbumName'><%= album.name%></span></a><input class='<%=album.id %>saveAlbumName hiddenAlbumname' type="text" value="<%= album.name%>" hidden><br/><button id="<%= album.id%>" class="addMorePhoto">Add more Photo</button>
    <button id="<%= album.id%>" class="editAlbumNameBtn">Edit Album Name</button>
    <button id="<%= album.id%>" class="updateAlbumNameBtn">Update Album Name</button>
</li>
<%});%>

    </ol>
</script>

<script type="text/script" id="photoListTemplate">
    <ul>
        <% _.each(photos, function(photo){ %>
        <li><a href="<%= photo.name%>" class="group1" rel="group1"><img src="<%= photo.name%>" alt="<%= photo.name%>" height="70" width="70"></a><a class="deletePhoto" id="<%= photo.id%>">Delete</a></li>
        <%});%>
    </ul>
</script>

<script type="text/script" id="userRegistrationTemplate">
    <form id="userRegistrationForm" method="post" action="">
    <label>user name</label><input type="text" name="username" class="username" >
    <label>password</label><input type="text" name="password" class="password" >
    <span id="error"></span>
    </form>
    <button id="registerBtn">Rigister</button>
</script>