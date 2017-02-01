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
                {foreach $school_arms as $arm}
                    <tr>
                        <td>{$arm->name} </td>
                        <td>
                            <a href="{site_url("school/edit_arm/{$arm->schoolarm_id}")}"
                               class="btn-form-modal btn btn-default"
                               data-url="{site_url("school/edit_arm/{$arm->schoolarm_id}")}"
                               
                               >Edit</a>
                            <a href="{site_url("school/delete_arm/{$arm->schoolarm_id}")}"  
                               class="btn btn-danger"
                               >Delete</a>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
    <div id="add" class="tab-pane fade">
        <form method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
               
            </div>
           
            <input type="submit" name="submit" class="btn btn-default"  value="Submit"   />
        </form>
    </div>
</div>