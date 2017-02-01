<title>Add Session of School</title>

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Veiw All</a></li>
    <li><a  data-toggle="tab" href="#add_session">Add Term</a>
    </li>

</ul>


<div id="add_session" class="tab-pane fade">
    <div class="col-xs-12 col-sm-9">
        <form class="form-horizontal" role="form" method="POST">
            <div class="form-group">
                <label for="session_name" class="col-sm-2 control-label">
                 Session Name:   
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="session_name" placeholder="Enter Session Name">
                </div>
            </div>

            <div class="form-group">
                <label for="user_id" class="col-sm-2 control-label">
                 User ID:   
                </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" 
                    name="user_id" placeholder="Enter User ID">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">
                    Submit</button>
                </div>
            </div>
            
        </form>
    </div>
</div>
