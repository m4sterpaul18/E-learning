$(function(){
    let hour = new Date().getHours();
    let message;
    let icon;

    // text
    const morning = "Good Morning";
    const afternoon = "Good Afternoon";
    const evening = "Good Evening";

    // icons
    const morningIcon = "/e-learning/public/assets/svg/morning.png";
    const afternoonIcon = "/e-learning/public/assets/svg/afternoon.png";
    const eveningIcon = "/e-learning/public/assets/svg/night.png";

    if (hour >= 0 && hour < 12) {
		message = morning; 
        icon = morningIcon;

	} else if (hour >= 12 && hour < 17) {
		message = afternoon;
        icon = afternoonIcon;

	} else if (hour >= 17 && hour < 24) {
		message = evening;
        icon = eveningIcon;
	}

    $('#greetings').append(message);
    $('#greetingsImage').attr('src',icon);
})