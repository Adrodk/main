function initAutocomplete() {
  const input = document.getElementById('address');
  const autocomplete = new google.maps.places.Autocomplete(input, {
    types: ['address'],
    componentRestrictions: { country: 'us' },
  });
  input.addEventListener('click', () => {
    if (input.value !== '') {
      input.value = '';
    } else {
      input.placeholder =
        autocomplete.getPlace()?.formatted_address || 'Enter an address';
    }
  });
}

google.maps.event.addDomListener(window, 'load', initAutocomplete);

console.log(
  'This is a real estate site using Google Maps API to search for addresses in USA'
);
