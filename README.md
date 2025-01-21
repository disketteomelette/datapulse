# datapulse
DataPulse is a JavaScript script that discreetly collects user data and sends it to a PHP script to store it in an organized log system.
This project demonstrates how much data can be collected from a user visiting a webpage without any direct interaction or consent. Through a combination of JavaScript and PHP scripts, this project collects a wide range of information about the user's environment and behavior on the page, sending it to a server periodically.

This is a programming exercise designed to showcase how much information can be gathered by a website without explicit user permission or action.
Functionality

The JavaScript script captures various real-time data about the user's browser environment and interactions. This data is sent to a PHP script every second, which logs it to a file.

The data includes information about device configuration, user behavior, and browser details. Additionally, the ID of the HTML element clicked by the user is recorded, providing insights into which parts of the page are being interacted with.
Data Structure

Every second, a log string is generated with the following structure:

[seconds];[mouse position];[click count];[keys pressed];[scroll position];[inactivity status];[page visibility];[user agent];[screen dimensions];[connection type];[downlink speed];[user language];[hour and minute];[window dimensions];[color depth];[cookies enabled];[device memory];[current URL];[online status];[device orientation];[zoom level];[available screen dimensions];[OS CPU];[battery level];[history length];[UTC time];[user languages];[dark mode preference];[window dimensions];[user IP];[FPS];[geo location];[high contrast mode];[touch points];[pointer enabled];[clicked element ID];MD5:[hash MD5]

Breakdown of Data Collected

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

heheh
