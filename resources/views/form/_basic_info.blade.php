<script type="text/javascript">

    $(document).ready(function ()
    {
        $("#pw").click(function(){
              $('#password').toggle();
              $this.prop("checked");
            });
        $("#add_basic_info").click(function(){
            $('#web').append("<input type='text' id='w'>");
            $('#delete_basic_info').show();
      
        });
        $('#delete_basic_info').click(function(){
            $('#w').detach();
        });
    });
</script>

     <div class="form-control col-sm-8">
            {!! Form::text('name',null,array(
                'class'=> 'validate',
                'id' => 'name'
            )); !!}
            <label for="name">Name:</label>
        </div>
        <div class="form-control col-sm-8">
            {!! Form::text('email',null,array(
                'class' => 'validate',
                'id' => 'email'
            )); !!}
            <label for="email">Email</label>
        </div>
        <br>
        <div class="form-control col-sm-8" id="pw">
            <input type="checkbox" id="pw" />
            <label for="pw">Password (only if you want to register)</label>
        </div>
        <div class="form-control col-sm-8"  id="password" style="display: none;">
            <label>Password:</label>
            <input type="password" class="validate">
        </div>
        <div class="form-control col-sm-8" id="web">
            {!! Form::text('websites',null,array(
                'class' => 'validate',
                'id' => 'websites'
            )); !!}
            <label for="websites">Websites:</label>
            <div class="form-control col-sm-4">
                {!! Form::button('Delete',array(
                    'class' => 'waves-effect waves-light btn-large',
                    'id' => 'delete_basic_info',
                    'style' => 'display:none;'
                )); !!}
            </div>      
        </div>
        <div class="form-control col-sm-8">
            <div class="input-field col-sm-4">
                {!! Form::button('Add+',array(
                    'class' => 'waves-effect waves-light btn-large',
                    'id' => 'add_basic_info'
                )); !!} 
            </div>
        </div>
        
    </div>       

