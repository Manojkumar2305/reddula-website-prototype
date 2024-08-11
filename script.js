document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("formID");
    form.addEventListener("submit", function (event) {
      event.preventDefault(); 
  
      const formData = new FormData(form);
  
      const formDataObject = {};
      formData.forEach(function (value, key) {
        formDataObject[key] = value;
      });
  
      console.log(formDataObject);
  
      form.reset();
    });
  });



function scrollToSection(sectionId) {
  const section = document.querySelector('#' + sectionId); // Use ID selector
  if (section) { // Check if section exists
    section.scrollIntoView({ behavior: 'smooth' });
  } else {
    console.error('Section with ID ' + sectionId + ' not found.');
  }
}

  
  function openWhatsApp() {
    const phoneNumber = '7995282176';
    const message = 'I want to buy a product.';
    const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
    window.open(whatsappUrl, '_blank');
  }

  function openSignInPage() {
    window.location.href = 'signin.php';
  }

  function openSignUpPage() {
    window.location.href = 'signup.php';
  }