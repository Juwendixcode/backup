                <div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
                    <label>Nama tanaman :</label>
                    {!!Form::text('nama', null, ['class'=>'form-control'])!!}
                    {!! $errors->first('nama', '<span class="help-block">Nama :message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('kpmj') ? 'has-error' : ''}}">
                    <label>Kebutuhan bibit Kg/ha (Jajar legowo) :</label>
                    {!!Form::text('kpmj', null, ['class'=>'form-control'])!!}
                    {!! $errors->first('kpmj', '<span class="help-block">Kebutuhan bibit (Jajar legowo) :message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('kpmb') ? 'has-error' : ''}}">
                    <label>Kebutuhan bibit Kg/ha (Biasa) :</label>
                    {!!Form::text('kpmb', null, ['class'=>'form-control'])!!}
                    {!! $errors->first('kpmb', '<span class="help-block">Kebutuhan bibit (Biasa) :message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('hpmj') ? 'has-error' : ''}}">
                    <label>Hasil panen ton/ha (Jajar legowo) :</label>
                    {!!Form::text('hpmj', null, ['class'=>'form-control'])!!}
                    {!! $errors->first('hpmj', '<span class="help-block">Hasil panen (Jajar legowo) :message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('hpmb') ? 'has-error' : ''}}">
                    <label>Hasil panen ton/ha (Biasa) :</label>
                    {!!Form::text('hpmb', null, ['class'=>'form-control'])!!}
                    {!! $errors->first('hpmb', '<span class="help-block">Hasil panen (Biasa) :message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('kpu') ? 'has-error' : ''}}">
                    <label>Kebutuhan pupuk urea Kg/ha:</label>
                    {!!Form::text('kpu', null, ['class'=>'form-control'])!!}
                    {!! $errors->first('kpu', '<span class="help-block">Kebutuhan pupuk urea :message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('kps') ? 'has-error' : ''}}">
                    <label>Kebutuhan pupuk SP-36 Kg/ha:</label>
                    {!!Form::text('kps', null, ['class'=>'form-control'])!!}
                    {!! $errors->first('kps', '<span class="help-block">Kebutuhan pupuk SP-36 :message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('kpk') ? 'has-error' : ''}}">
                    <label>Kebutuhan pupuk KCL Kg/ha:</label>
                    {!!Form::text('kpk', null, ['class'=>'form-control'])!!}
                    {!! $errors->first('kpk', '<span class="help-block">Kebutuhan pupuk KCL :message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('kpu') ? 'has-error' : ''}}">
                    <label>Kebutuhan pupuk kandang Kg/ha:</label>
                    {!!Form::text('kph', null, ['class'=>'form-control'])!!}
                    {!! $errors->first('kph', '<span class="help-block">Kebutuhan pupuk kandang :message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('hbibit') ? 'has-error' : ''}}">
                    <label>Harga bibit/Kg :</label>
                    {!!Form::text('hbibit', null, ['class'=>'form-control'])!!}
                    {!! $errors->first('hbibit', '<span class="help-block">Harga bibit/Kg :message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('hjual') ? 'has-error' : ''}}">
                    <label>Harga jual/Kg :</label>
                    {!!Form::text('hjual', null, ['class'=>'form-control'])!!}
                    {!! $errors->first('hjual', '<span class="help-block">Harga bibit/Kg :message</span>') !!}
                </div>
                <div class="form-group">
                    {!!Form::submit('Simpan tanaman', ['class'=>'navbar-btn btn-primary btn'])!!}
                </div>