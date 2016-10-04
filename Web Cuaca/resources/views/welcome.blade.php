{!! Form::open(array('url' => 'dropdown', 'class' => 'form-horizontal')) !!}
            <div align="center">
            
         <form action="" method="post">   
             <select name="kota">  
             <option value="Jakarta">Jakarta</option>  
             <option value="Bandung">Bandung</option>  
             <option value="Bali">Bali</option>  
              <option value="Medan">Medan</option> 
             </select>   
             <input type="submit" name="go" value="GO!">   
         </form>  
         </div>
 {!! Form::close() !!}