<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Urine Full Report (U.F.R)</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <input hidden="true" value="{{$req->input('type')}}" name="type">
    <div class="box-body">
            <div class="form-group">
                <label for="appearance">Appearance</label>
                <input @if($req_old->appearance)value={{$req_old->appearance}}@endif type="text" list="appearance_set" name="appearance" class="form-control" id="appearance" placeholder="">
                <datalist id="appearance_set">
                    <option>Clear</option>
                    <option>Yellow</option>
                    <option>Turbid</option>
                    <option>S.Turbid</option>
                    <option>Straw Colour</option>
                    <option>Blood Stain</option>
                    <option>Grossly Blood Stain</option>
                </datalist>
            </div>
        @if($req->input('type')=='7')
            <div class="form-group">
                <label for="sg">S.G.</label>
                <input @if($req_old->sg)value={{$req_old->sg}}@endif type="text" name="sg" class="form-control" id="sg" placeholder="">
            </div>
        @endif
        <div class="form-group">
            <label for="reaction">Reaction</label>
            <input type="reaction" @if($req_old->reaction)value={{$req_old->reaction}}@endif name="reaction" class="form-control" id="reaction" placeholder="">
        </div>
        <label for="albumen">Albumen</label>
        <input type="text" @if($req_old->albumen)value={{$req_old->albumen}}@endif  name="albumen" class="form-control" id="albumen"  list="albumen_set">
        <datalist id="albumen_set">
            <option>nil</option>
            <option>Trace</option>
            <option>Faint Trace</option>
            <option>+</option>
            <option>++</option>
            <option>+++</option>
        </datalist>

        <div class="form-group">
            <label for="sugar">Sugar</label>
            <input @if($req_old->sugar)value={{$req_old->sugar}}@endif type="text" list="sugar" name="sugar" class="form-control" id="sugar" >
            <datalist id="sugar_set">
                <option>nil</option>
                <option>Trace</option>
                <option>0.5 g%</option>
                <option>1.0 g%</option>
                <option>1.5 g%</option>
                <option>2.0 g%</option>
                <option>>2.0 g%</option>
            </datalist>
        </div>
            <div class="form-group">
                <label for="acetone">Acetone</label>
                <input @if($req_old->acetone)value={{$req_old->acetone}}@endif type="text" name="acetone" class="form-control" id="acetone" placeholder="">
            </div>
        <div class="form-group">
            <label for="bile">Bile Pigment</label>
            <input type="bile" name="bile" class="form-control" id="bile" @if($req_old->bile)value={{$req_old->bile}} @endif placeholder="">
        </div>
            <div class="form-group">
                <label for="urobilino">Urobilino gen</label>
                <input @if($req_old->urobilino)value={{$req_old->urobilino}}@endif type="text" name="urobilino" class="form-control" id="urobilino" placeholder="">
            </div>
        <h4>Deposits</h4>
        <div class="form-group">
            <label for="u_pus">Pus Cells</label>
            <input @if($req_old->u_pus)value={{$req_old->u_pus}}@endif list="u_pus_set" type="text" name="u_pus" class="form-control" id="u_pus" placeholder="">
            <datalist id="u_pus_set">
                <option>nil</option>
                <option>+ ( 1-2/field )</option>
                <option>+ ( 1-3/field )</option>
                <option>+ ( Occasional )</option>
                <option>+ + + ( field  full )</option>
                <option>+ (3-5/field) , Clustures  of  pus  cells</option>
                <option>+ + (Moderatly  field  full)</option>
                <option>++ (10-15/field)</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="u_rbc">R.B.Cs</label>
            <input @if($req_old->u_rbc)value={{$req_old->u_rbc}}@endif type="text" list="u_rbc_set" name="u_rbc" class="form-control" id="u_rbc" placeholder="">
            <datalist id="u_rbc_set">
                <option>nil</option>
                <option>+</option>
                <option>+ +</option>
                <option>+ ( 1-2/field )</option>
                <option>+ ( Occasional )</option>
                <option>+ + (Moderatly  field  full)</option>
                <option>+ + + (field  full)</option>
                <option>+ (2-3/field)</option>
                <option>+ ( 1-3/field )</option>
                <option>+ + (10-15/field)</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="fpi">Fpi Cells</label>
            <input @if($req_old->fpi)value={{$req_old->fpi}}@endif type="text" list="fpi_set" name="fpi" class="form-control" id="fpi" placeholder="">
            <datalist id="fpi_set">
                <option>+ few</option>
                <option>++</option>
                <option>+++</option>
                <option>nil</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="cast">Cast</label>
            <input @if($req_old->cast)value={{$req_old->cast}}@endif type="text" list="cast_set" name="cast" class="form-control" id="cast" placeholder="">
            <datalist id="cast_set">
                <option>nil</option>
                <option>Granular  casts</option>
                <option>Moderatly  field  full</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="o_deposit">Organized Diposits</label>
            <input @if($req_old->o_deposit)value={{$req_old->o_deposit}}@endif type="text" list="o_deposit_set" name="o_deposit" class="form-control" id="o_deposit" placeholder="">
            <datalist id="o_deposit_set">
                <option>nil</option>
                <option>Ammorphus  phosphetes +</option>
                <option>Organisam +</option>
                <option>Monilia +</option>
                <option>Yeast  Cells</option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="crystals">Crystals</label>
            <input @if($req_old->crystals)value={{$req_old->crystals}}@endif type="text" list="crystals_set" name="crystals" class="form-control" id="crystals" placeholder="">
            <datalist id="crystals_set">
                <option>nil</option>
                <option>Calcium  oxalates +</option>
                <option>few  Calcium oxalates</option>
                <option>Monilia +</option>
                <option>Triple  phosphetes</option>
            </datalist>
        </div>

    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</div>

</div>
<!-- /.box -->

</form>