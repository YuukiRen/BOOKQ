    public function up()
    {
        Schema::create('User', function (Blueprint $table) {
			$table->string('username')->primary();
            $table->string('email');
            $table->string('password');
            $table->string('full_name');
            $table->string('alamat');
			$table->int('no_hp');
			$table->longText('about');
            $table->string('faculty');
            $table->string('dept');
            $table->int('reported');
			$table->float('rating');
            $table->timestamps();
        });
        
		Schema::create('Own', function (Blueprint $table) {
            $table->string('id_book');
            $table->string('reviewer_name');
            $table->string('review');
            $table->float('rating');
			$table->int('no_hp');
			$table->dateTime('time_limit');
            $table->timestamps();
        });


		Schema::create('user', function (Blueprint $table) {
            $table->string('email');
            $table->string('password');
            $table->string('full_name');
            $table->string('alamat');
			$table->int('no_hp');
			$table->longText('about');
            $table->string('faculty');
            $table->string('dept');
            $table->int('reported');
			$table->float('rating');
            $table->timestamps();
        });

        
        
    }
    
    
