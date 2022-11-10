if (window.matchMedia) {
    var match = window.matchMedia('(prefers-color-scheme: dark)')
    toggleDarkMode(match.matches);
   
    match.addEventListener('change', e => {
        toggleDarkMode(match.matches);
    })
    function toggleDarkMode(state) {
        const uiState = state == true ? 'dark' : 'light'
        return(uiState);
        }
 }