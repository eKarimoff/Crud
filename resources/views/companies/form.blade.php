             <div class="mb-3">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{old('name') ?? $company->name}}">
             
            </div>
            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address" value="{{old('phone')?? $company->address}}">
            </div>
            <div class="mb-3">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{old('address')?? $company->phone}}">
              </div>