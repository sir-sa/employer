const name = document.getElementById('name')
const applicant_id = document.getElementById('applicant_id')
const email = document.getElementById('email')
const phone = document.getElementById('phone')
const address = document.getElementById('address')
const file = document.getElementById('file')
const job-main-form = document.getElementById('job-main-form')
const errorElement = document.getElementById('error')


job-main-form.addEventListener('submit', (e)=> {
	let messages = []
	if(name.value === '' || name.value ==null ){
		messages.push('name required')
	}

	if(applicant_id.length =>8){
		messages.push('Id must be longer than 8 characters')
	}

	if (email.value === '' || email.value ==null) {
		messages.push('email required')
	}

	if (phone.length =>10) {
		messages.push('phone should have 10 digits')
	}

	if (address.value === '' || address.value ==null) {
		messages.push('Your address is required')
	}

	if (file.value === '' || file.value=null) {
		messages.push('file required')
	}

	if(messages.length ){
		e.preventDefault()
		errorElement.innerText = messages.join(', ')
	}
})