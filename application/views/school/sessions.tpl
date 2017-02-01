<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#all">All</a></li>
    <li><a data-toggle="tab" href="#add">Add New</a></li>
</ul>

<div class="tab-content">
    <div id="all" class="tab-pane fade in active">
        <table class="data-table table table-responsive table-borderd table-condensed">
            <thead>
                <tr>
                    <th>Name</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {foreach $sessions as $session}
                    <tr>
                        <td>
                            {$session->session_name}  
                        </td>
                        <td>
                            <a href="{site_url("school/edit_session/{$session->session_id}")}">Edit</a>
                            <a href="{site_url("school/delete_session/{$session->session_id}")}">Delete</a>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>

    <div id="add" class="tab-pane fade">
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

</div>
