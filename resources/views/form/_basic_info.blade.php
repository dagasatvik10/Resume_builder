<script type="text/javascript">

    $(document).ready(function ()
    {
        $("#pw").click(function(){
              $('#password').toggle();
              $this.prop("checked");
            });
        $("#add").click(function(){
            $('#web').append("<input type='text' id='w'>");
            $('#delete').show();
      
        });
        $('#delete').click(function(){
            $('#w').detach();
        });
    });
</script>

     <div class="input-field col s8">
            {!! Form::text('name',null,array(
                'class'=> 'validate',
                'id' => 'name'
            )); !!}
            <label for="name">Name:</label>
        </div>
        <div class="input-field col s8">
            {!! Form::text('email',null,array(
                'class' => 'validate',
                'id' => 'email'
            )); !!}
            <label for="email">Email</label>
        </div>
        <br>
        <div class="input-field col s8" id="pw">
            <input type="checkbox" id="pw" />
            <label for="pw">Password (only if you want to register)</label>
        </div>
        <div class="input-field col s8"  id="password" style="display: none;">
            <label>Password:</label>
            <input type="password" class="validate">
        </div>
        <div class="input-field col s8" id="web">
            {!! Form::text('websites',null,array(
                'class' => 'validate',
                'id' => 'websites'
            )); !!}
            <label for="websites">Websites:</label>
        </div>
        <div class="input-field col s8">
            <div class="input-field col s4">
                {!! Form::button('Add+',array(
                    'class' => 'waves-effect waves-light btn-large',
                    'id' => 'add'
                )); !!} 
            </div>
            <div class="input-field col s4">
                {!! Form::button('Delete',array(
                    'class' => 'waves-effect waves-light btn-large',
                    'id' => 'delete',
                    'style' => 'display:none;'
                )); !!}
            </div>      
        </div>
        
    </div>       

