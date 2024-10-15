# Mercure PoC

> Simple proof of concept with a publisher ([Symfony](https://symfony.com) application) and a subscriber (web page) communicating through [Mercure](https://mercure.rocks).

<!-- TOC -->
* [Installation](#installation)
* [Publication](#publication)
* [Subscription](#subscription)
<!-- TOC -->

### Installation

After cloning the repository, simply run:

```shell
docker compose up -d
```

### Publication

Once installed, you can publish a message from [http://localhost:8080/publish](http://localhost:8080/publish), that will respond:

```html
Notification published with success.
Message: test message id 28922137843597
Event ID: 28922137843597
```

### Subscription

In another tab, you can run a subscriber from [http://localhost:8080/subscribe](http://localhost:8080/subscribe).
The messages will be printed in the web browser console.

If needed, to can get all the messages history from a past event id, for example [http://localhost:8080/subscribe?lastEventId=28922137843597](http://localhost:8080/subscribe?lastEventId=28922137843597).