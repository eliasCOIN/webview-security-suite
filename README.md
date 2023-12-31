# WebView Security Suite (iOS & Android)

Multiple Media Access Test: Tests if the application can access both audio and video simultaneously without proper permissions.
Rapid Permission Requests Test: Checks how the application handles multiple rapid-fire requests for permissions.
Audio Access Test: Tests if the application can access audio devices without proper permissions.
Video Access Test: Tests if the application can access video devices without proper permissions.
Multiple Video Streams Test: Checks if the application can access multiple video streams simultaneously.
Camera Test: Tests if the application can access the camera without proper permissions.
File System Access Test: Checks if the application can read from or write to protected areas of the file system.
JavaScript Bridge Test: Tests if internal JavaScript-to-native bridges are exposed to the application.
Automatic Phone Call/SMS/Email/FaceTime Initiation Test: Checks if the application can initiate phone calls, SMS, emails, or FaceTime without user interaction.
Instant/Delayed/Meta/Replace/Assign Redirection Test: Tests how the application handles different types of URL redirections.
SSL Spoofing Test: Checks if the application accepts invalid SSL certificates.
Secure Context Test: Verifies if the application is running in a secure context and if all resources are loaded securely.
WebRTC Leak Test: Tests if WebRTC is leaking local or public IP addresses.
Note: There is going to be a leak on Android. That is not something we have control over currently
Discussion from 7 years ago: https://stackoverflow.com/questions/36174648/disable-android-webview-webrtc#:~:text=1%20Answer%20Sorted%20by%3A%203,ips%20Share%20Improve%20this%20answer
2022 comments: https://issuetracker.google.com/issues/236163088?pli=1
Clipboard API Test: Checks if the application can read from or write to the clipboard without user interaction.
GLB File UXSS Test: Tests if the application is vulnerable to Universal Cross-Site Scripting (UXSS) through GLB files.
Mixed Content Test: Checks if the application loads mixed (secure and insecure) content.
Intent URL Scheme Test: Tests if the application can initiate custom intent URLs without user interaction.
File Access Test: Checks if the application can access the file system directly.
JavaScript Interface Exposure Test: Tests if JavaScript interfaces are exposed to the application.
Content URI Access Test: Checks if the application can access content URIs.
Content Scheme Test: Tests how the application handles Android content schemes.
