class Errors {

	constructor(){
		this.errors = { };
	}

	get(field){
		if (this.errors[field]) {
			return this.errors[field][0];
		}
		
		
	}
	any(){

		return Object.keys(this.errors).length > 0;
	}
	record(errors){

		this.errors = errors;
	}

	clear(field){

		delete this.errors[field];
	}

}

new Vue({
  el: '#app',
  data: {
    message: 'Create New Projects',
    name: '',
    description: '',
    errors: new Errors()
  },
  methods: {
  	onSubmit(){
  		axios.post('/projects', this.$data)
  			 .then((response) => { console.log(response.data)})
  			 .catch(errors => this.errors.record(errors.response.data));
  	}
  }
})