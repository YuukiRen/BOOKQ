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


		Schema::create('Book', function (Blueprint $table) {
            $table->string('id_book')->primary();
            $table->string('name');
            $table->string('genre');
            $table->longText('description');
            $table->timestamps();
        });
		
		Schema::create('Message', function (Blueprint $table) {
            $table->string('user_a');
            $table->string('user_b');
            $table->longText('message');
            $table->timestamps();
        });
		        
        
    }
    
    
