
{{---------------------------------------------------------------------------------------}}
{{--stool full report--}}
{{---------------------------------------------------------------------------------------}}
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Stool Full Report (S.F.R)</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <input hidden="true" value="{{$req->input('type')}}" name="type">
        <div class="box-body">
            <div class="form-group">
                <label for="hwo">H.W.O</label>
                <input @if($req_old->hwo)value={{$req_old->hwo}}@endif type="text" list="hwo_set" name="hwo" class="form-control" id="hwo" placeholder="">
                <datalist id="hwo_set">
                    <option>nil</option>
                    <option>+</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="rwo">R.W.O</label>
                <input @if($req_old->rwo)value={{$req_old->rwo}}@endif type="text" list="rwo_set" name="rwo" class="form-control" id="rwo" placeholder="">
                <datalist id="rwo_set">
                    <option>nil</option>
                    <option>+</option>
                </datalist>
            </div>
            <h4>Other Data</h4>
            <div class="form-group">
                <label for="ameba">Ameba</label>
                <input @if($req_old->ameba)value={{$req_old->ameba}}@endif type="text" list="ameba_set" name="ameba" class="form-control" id="ameba" placeholder="">
                <datalist id="ameba_set">
                    <option>nil</option>
                    <option>+</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="cysts">Cysts</label>
                <input @if($req_old->cysts)value={{$req_old->cysts}}@endif type="text" list="cysts_set" name="cysts" class="form-control" id="cysts" placeholder="">
                <datalist id="cysts_set">
                    <option>nil</option>
                    <option>+</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="clc">C.L. Cristal</label>
                <input @if($req_old->clc)value={{$req_old->clc}}@endif type="text" list="clc_set" name="clc" class="form-control" id="clc" placeholder="">
                <datalist id="clc_set">
                    <option>nil</option>
                    <option>+</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="s_pus">Puss Cells</label>
                <input @if($req_old->s_pus)value={{$req_old->s_pus}}@endif list="s_pus_set" type="text" name="s_pus" class="form-control" id="s_pus" placeholder="">
                <datalist id="s_pus_set">
                    <option>nil</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="s_rbc">R.B.Cs</label>
                <input @if($req_old->s_rbc)value={{$req_old->s_rbc}}@endif type="text" list="s_rbc_set" name="s_rbc" class="form-control" id="s_rbc" placeholder="">
                <datalist id="s_rbc_set">
                    <option>nil</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="mucus">Mucus</label>
                <input @if($req_old->mucus)value={{$req_old->mucus}}@endif type="text" list="mucus_set" name="mucus" class="form-control" id="mucus" placeholder="">
                <datalist id="mucus_set">
                    <option>nil</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="macrophags">Macrophags</label>
                <input @if($req_old->macrophags)value={{$req_old->macrophags}}@endif type="text" list="macrophags_set" name="macrophags" class="form-control" id="macrophags" placeholder="">
                <datalist id="macrophags_set">
                    <option>nil</option>
                    <option>+</option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="consistens">Consistens</label>
                <input @if($req_old->consistens)value={{$req_old->consistens}}@endif type="text" name="consistens" class="form-control" id="consistens" placeholder="">
            </div>
            <div class="form-group">
                <label for="r_substances">Reducin Substances</label>
                <input @if($req_old->r_substances)value={{$req_old->r_substances}}@endif type="text" list="r_substances_set" name="r_substances" class="form-control" id="r_substances" placeholder="">
                <datalist id="r_substances_set"><option>nil</option>
                    <option>Trace</option>
                    <option>0.5 g%</option>
                    <option>1.0 g%</option>
                    <option>1.5 g%</option>
                    <option>2.0 g%</option>
                    <option>>2.0 g%</option>
                </datalist>
            </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
<!-- /.box -->

</form>