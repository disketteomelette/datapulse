# datapulse
Databeat is a programming exercise in JS/PHP that demonstrates how easy it is to gather user information without requiring their explicit permission. The data collected via JavaScript is sent every second to a PHP backend, which stores it in a file structure based on an MD5 hash and the user's IP address (located in the /logs folder). 

Every second, a log string is generated (and added to session log) with the following structure:

[seconds];[mouse position];[click count];[keys pressed];[scroll position];[inactivity status];[page visibility];[user agent];[screen dimensions];[connection type];[downlink speed];[user language];[hour and minute];[window dimensions];[color depth];[cookies enabled];[device memory];[current URL];[online status];[device orientation];[zoom level];[available screen dimensions];[OS CPU];[battery level];[history length];[UTC time];[user languages];[dark mode preference];[window dimensions];[user IP];[FPS];[geo location];[high contrast mode];[touch points];[pointer enabled];[clicked element ID];MD5:[hash MD5]

#  Data Collected

    seconds: The number of seconds since the script started.
    mouse position: The x and y coordinates of the mouse pointer at the moment of the event.
    click count: Total number of mouse clicks during that second.
    keys pressed: A list of the keys pressed during the last second.
    scroll position: Vertical scroll position on the page in pixels.
    inactivity status: Whether the user has been inactive (more than 5 seconds with no interaction) or active.
    page visibility: Whether the page is visible or hidden in the browser.
    user agent: Information about the user's browser and operating system.
    screen dimensions: The width and height of the user's screen in pixels.
    connection type: The user's Internet connection type (e.g., 'wifi', 'cellular').
    downlink speed: The download speed of the connection (if available).
    user language: The user's preferred language (e.g., 'en-US').
    hour and minute: Local time of the user in hours and minutes.
    window dimensions: Width and height of the browser window.
    color depth: The color depth of the screen.
    cookies enabled: Whether cookies are enabled in the user's browser.
    device memory: The amount of memory available on the user's device (if available).
    current URL: The full URL of the page the user is currently visiting.
    online status: Whether the user is online or offline.
    device orientation: The orientation of the device (if available).
    zoom level: The device's zoom level in the browser.
    available screen dimensions: The available screen size excluding the taskbar and other UI elements.
    OS CPU: The type of CPU on the user's system (if available).
    battery level: Battery level of the user's device (if available).
    history length: The number of entries in the user's browser history.
    UTC time: The current UTC time.
    user languages: The user's preferred languages.
    dark mode preference: Whether the user prefers a dark theme in their interface.
    window dimensions: The width and height of the browser window.
    user IP: The user's IP address.
    FPS: The frames per second at which the page is being rendered.
    geo location: The approximate geo-location of the user (if available).
    high contrast mode: Whether the user has high-contrast mode enabled in their system.
    touch points: The maximum number of touch points supported by the device.
    pointer enabled: Whether pointer events are supported on the device.
    clicked element ID: The ID of the HTML element the user clicked (if it exists).

# Usage
1. Place both scripts on your host and call the script using <script src="analytics.global.js"></script>.
2. Grant write permissions to the /logs folder where the PHP script is located.
3. ?????
4. Profit!

# Legal
This script is provided "as is" for educational and demonstrational purposes only. The author assumes no responsibility or liability for any misuse, unauthorized application, or consequences resulting from the use of this script. By using this script, you agree that you are solely responsible for ensuring compliance with all applicable laws, regulations, and ethical standards in your jurisdiction. Use at your own risk.
This script is licensed under the Creative Commons Attribution. It includes a minified version of the MD5 function for JS, under the MIT license.
