                <div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
                    <label>Nama pupuk :</label>
                    {!!Form::text('nama', null, ['class'=>'form-control'])!!}
                    {!! $errors->first('nama', '<span class="help-block">Nama :message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
                    <label>Slug (Unik):</label>
                    {!!Form::text('slug', null, ['class'=>'form-control'])!!}
                    {!! $errors->first('slug', '<span class="help-block">Slug :message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('harga') ? 'has-error' : ''}}">
                    <label>Harga :</label>
                    {!!Form::text('harga', null, ['class'=>'form-control'])!!}
                    {!! $errors->first('harga', '<span class="help-block">Harga :message</span>') !!}
                </div>
                <div class="form-group">
                    <label>Jenis Pupuk :</label>
                    <select class="form-control" id="jenis" name="jenis">
                        <option value="Organik">Organik</option>
                        <option value="Anorganik">Anorganik</option>
                    </select>
                </div>
                <div class="form-group {{ $errors->has('dsingkat') ? 'has-error' : ''}}">
                    <label>Deskripsi singkat :</label>
                    {!!Form::textarea('dsingkat', null, ['class'=>'form-control'])!!}
                    {!! $errors->first('dsingkat', '<span class="help-block">Deskripsi singkat :message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('dpanjang') ? 'has-error' : ''}}">
                    <label>Deskripsi lengkap :</label>
                    {!!Form::textarea('dpanjang', null, ['class'=>'form-control'])!!}
                    {!! $errors->first('dpanjang', '<span class="help-block">Deskripsi lengkap :message</span>') !!}
                </div>
                {!!Form::submit('Simpan pupuk', ['class'=>'btn btn-primary'])!!}