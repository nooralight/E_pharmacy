<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap');

body {
    margin: 0;
    padding: 0;
    background: linear-gradient(
        #243545,
        #243545 var(--line-offset),
        #dedede var(--line-offset)
    );
    width: 100vw;
    height: 100vh;
    font-family: 'Lexend Deca', sans-serif;
    color: #878787;

    --menu-item-size: 50px;
    --green-color: #329680;
    --blue-color: #099c95;
    --dark-green-color: #175b52;
    --white-color: #FFF;
    --gray-color: #EDEDED;
    --container-width: 800px;
    --container-height: 695px;
    --line-offset: calc((100% - var(--container-height))/ 2 + var(--menu-item-size) + 0.6em);
    
    
}


.container {
    width: var(--container-width);
    height: var(--container-height);
    margin-left: -350px;
    margin-top: -200px;
    top: 35%;
    left: 50%;
    position: absolute;
    z-index: 1;
}

.main-menu {
    display: flex;
    list-style: none;
    margin: auto 0;
    padding: 0.6em 0 0 0;
}

.main-menu > li {
    box-sizing: border-box;
    height: var(--menu-item-size);
    width: calc(3.5 * var(--menu-item-size));  
    line-height: var(--menu-item-size);
    padding: 0 2em;
    margin: 1px;
    transition: 0.5s linear all;
    background: var(--green-color);
    color: var(--dark-green-color);
    cursor: pointer;
    font-size: 16px;
    user-select: none;
}

.main-menu > li:not(.with-submenu) {
    clip-path: polygon(10% 0%, 0% 100%, 95% 100%, 100% 50%, 95% 0%);
    shape-outside: polygon(10% 0%, 0% 100%, 95% 100%, 100% 50%, 95% 0%);
}

.main-menu > li:nth-child(2) {
    transform: translateX(-5%);
}

.main-menu > li:nth-child(3) {data-bs-target="#navbar-example2"
    transform: translateX(-10%)
}

.main-menu > li:nth-child(4) {
    transform: translateX(-15%)
}

.main-menu i {
    margin-right: 5px;
}

.main-menu > li:hover:not(.active) {
    background: linear-gradient(to right, var(--green-color), var(--blue-color));
    color: var(--white-color);
}

.main-menu > li:active:not(.active),
.main-menu > li:active:not(.with-submenu){
    background: var(--blue-color);
    color: var(--white-color);
}

.main-menu > li:hover i:not(li.active) {
    color: #175c58;
}

.main-menu .active {
    color: var(--white-color);
    background: var(--blue-color);
    cursor: default;
    text-shadow: 1px 1px 1px var(--dark-green-color);
    font-size: 18px;
}

article {
   background: var(--gray-color);
   padding: 2.5em;
   border-radius: 0 0 5px 5px;
   box-shadow: 5px 5px 5px #CCC;
   position: relative;
   z-index: -1;
}

h1 {
    font-size: 115%;
    margin: 1em 2em;
    padding: 0;
    position: relative;
    color: #777;
}

.content {
    padding: 0 0 0 3em;
    font-size: 16px;
}

.submenu {
    display: none;
    position: absolute;
    z-index: 10;
    list-style: none;
    left: 0;
    margin: 0;
    padding: 0;
    min-width: calc(3.5 * var(--menu-item-size) - 5%);
    box-shadow: 5px 5px 5px #CCC;
}

.with-submenu {
    position: relative;
    display: inline-block;
    clip-path: polygon(10% 0%, 0% 100%, 0% 500%, 95% 500%, 95% 100%, 100% 50%, 95% 0%);
    shape-outside: polygon(10% 0%, 0% 100%, 95% 100%, 100% 50%, 95% 0%);
}

.with-submenu:hover .submenu {
    display: block;
}

.submenu > li {
    background: #dedede;
    border-bottom: 1px solid var(--gray-color); 
    color: #777;
    padding: 1.2em 1em;
    transition: 0.3s all linear;
    display: block;
    line-height: 0%;
}

.submenu > li:hover {
    background: var(--gray-color)
}

.submenu > li:active {
    background: var(--white-color);
}
        </style>
    </head>
    <body>
        <div class="container">
            <nav class="menu">
                <ul class="main-menu">
                    <li style="font-size: 15px" class="active"><i class="fa fa-home"></i>Add Employee</li>
                </ul>
            </nav>
            <article>
                <form method="post" class="row g-3" style="margin-top: 20px" action="{{route("addingEmployee")}}">
                    @csrf
                    <div class="col-md-4" style="margin-left: 118px">
                      <label  class="form-label">Name</label>
                      <input type="text" class="form-control" id="inputEmail4" name="name">
                    </div>
                    <div class="col-md-4" >
                      <label  class="form-label">Id No</label>
                      <input type="text" class="form-control" id="inputEmail4" name="idno">
                    </div>
                    <div class="col-md-3" style="margin-left: 118px">
                      <label  class="form-label">Phone</label>
                      <input type="text" class="form-control" id="inputCity" name="phone">
                    </div>
                    <div class="col-md-5">
                        <label  class="form-label">Email</label>
                        <input type="text" class="form-control" id="inputCity" name= "email">
                    </div>          
                    <div class="col-6" style="margin-left: 288px;margin-top:40px;">
                      <button style="width:120px" type="submit" class="btn btn-primary">Save</button>
                    </div>
                    
                </form>
            </article>
        </div>
    </body>
</html>