@extends('app')

@section('title', 'Redactar email')

@section('content')

{!! Form::open(['route' => 'admin.notificaciones.mailbox', 'method' => 'POST', 'files' => true]) !!}
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Para:', 'required']) !!}              
             </div>
              <div class="form-group">
  {!! Form::text('subject', null, ['class' => 'form-control', 'placeholder' => 'Asunto:', 'required']) !!} 
              </div>
              <div class="form-group">
                    <ul class="wysihtml5-toolbar"><li class="dropdown">
  <a class="btn btn-default dropdown-toggle " data-toggle="dropdown">
    
      <span class="glyphicon glyphicon-font"></span>
    
    <span class="current-font">Normal text</span>
    <b class="caret"></b>
  </a>
  <ul class="dropdown-menu">
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="p" tabindex="-1" href="javascript:;" unselectable="on">Normal text</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" tabindex="-1" href="javascript:;" unselectable="on">Heading 1</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" tabindex="-1" href="javascript:;" unselectable="on">Heading 2</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h3" tabindex="-1" href="javascript:;" unselectable="on">Heading 3</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h4" tabindex="-1" href="javascript:;" unselectable="on">Heading 4</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h5" tabindex="-1" href="javascript:;" unselectable="on">Heading 5</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h6" tabindex="-1" href="javascript:;" unselectable="on">Heading 6</a></li>
  </ul>
</li>
<li>
  <div class="btn-group">
    <a class="btn  btn-default" data-wysihtml5-command="bold" title="CTRL+B" tabindex="-1" href="javascript:;" unselectable="on">Bold</a>
    <a class="btn  btn-default" data-wysihtml5-command="italic" title="CTRL+I" tabindex="-1" href="javascript:;" unselectable="on">Italic</a>
    <a class="btn  btn-default" data-wysihtml5-command="underline" title="CTRL+U" tabindex="-1" href="javascript:;" unselectable="on">Underline</a>
    
    <a class="btn  btn-default" data-wysihtml5-command="small" title="CTRL+S" tabindex="-1" href="javascript:;" unselectable="on">Small</a>
    
  </div>
</li>
<li>
  <a class="btn  btn-default" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="blockquote" data-wysihtml5-display-format-name="false" tabindex="-1" href="javascript:;" unselectable="on">
    
      <span class="glyphicon glyphicon-quote"></span>
    
  </a>
</li>
<li>
  <div class="btn-group">
    <a class="btn  btn-default" data-wysihtml5-command="insertUnorderedList" title="Unordered list" tabindex="-1" href="javascript:;" unselectable="on">
    
      <span class="glyphicon glyphicon-list"></span>
    
    </a>
    <a class="btn  btn-default" data-wysihtml5-command="insertOrderedList" title="Ordered list" tabindex="-1" href="javascript:;" unselectable="on">
    
      <span class="glyphicon glyphicon-th-list"></span>
    
    </a>
    <a class="btn  btn-default" data-wysihtml5-command="Outdent" title="Outdent" tabindex="-1" href="javascript:;" unselectable="on">
    
      <span class="glyphicon glyphicon-indent-right"></span>
    
    </a>
    <a class="btn  btn-default" data-wysihtml5-command="Indent" title="Indent" tabindex="-1" href="javascript:;" unselectable="on">
    
      <span class="glyphicon glyphicon-indent-left"></span>
    
    </a>
  </div>
</li>
<li>
  <div class="bootstrap-wysihtml5-insert-link-modal modal fade" data-wysihtml5-dialog="createLink">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal">×</a>
          <h3>Insert link</h3>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input value="http://" class="bootstrap-wysihtml5-insert-link-url form-control" data-wysihtml5-dialog-field="href">
          </div> 
          <div class="checkbox">
            <label> 
              <input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="">Open link in new window
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <a class="btn btn-default" data-dismiss="modal" data-wysihtml5-dialog-action="cancel" href="#">Cancel</a>
          <a href="#" class="btn btn-primary" data-dismiss="modal" data-wysihtml5-dialog-action="save">Insert link</a>
        </div>
      </div>
    </div>
  </div>
  <a class="btn  btn-default" data-wysihtml5-command="createLink" title="Insert link" tabindex="-1" href="javascript:;" unselectable="on">
    
      <span class="glyphicon glyphicon-share"></span>
    
  </a>
</li>
<li>
  <div class="bootstrap-wysihtml5-insert-image-modal modal fade" data-wysihtml5-dialog="insertImage">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal">×</a>
          <h3>Insert image</h3>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input value="http://" class="bootstrap-wysihtml5-insert-image-url form-control" data-wysihtml5-dialog-field="src">
          </div> 
        </div>
        <div class="modal-footer">
          <a class="btn btn-default" data-dismiss="modal" data-wysihtml5-dialog-action="cancel" href="#">Cancel</a>
          <a class="btn btn-primary" data-dismiss="modal" data-wysihtml5-dialog-action="save" href="#">Insert image</a>
        </div>
      </div>
    </div>
  </div>
  <a class="btn  btn-default" data-wysihtml5-command="insertImage" title="Insert image" tabindex="-1" href="javascript:;" unselectable="on">
    
      <span class="glyphicon glyphicon-picture"></span>
    
  </a>
</li>
</ul>
<!--textarea id="compose-textarea" class="form-control" style="height: 300px; display: none;">                      
                    </textarea><iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" style="display: block; background-color: rgb(255, 255, 255); border-collapse: separate; border-color: rgb(210, 214, 222); border-style: solid; border-width: 1px; clear: none; float: none; margin: 0px; outline: rgb(85, 85, 85) none 0px; outline-offset: 0px; padding: 6px 12px; position: static; top: auto; left: auto; right: auto; bottom: auto; z-index: auto; vertical-align: baseline; text-align: start; box-sizing: border-box; box-shadow: none; border-radius: 0px; width: 100%; height: 300px;"></iframe-->

{!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
                    
              </div>
              <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> 
                  {!! Form::file('imagen') !!}
                  <!--input type="file" name="attachment"-->
                </div>
                <p class="help-block">Max. 32MB</p>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
                <!--{!! Form::submit('Enviar', ['class' => 'btn btn-primary' onclick='']) !!}-->
               button type="submit" class="btn btn-primary"--><i class="fa fa-envelope-o"></i> </button>
              </div>
              <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>


        {!! Form::close() !!}
@endsection