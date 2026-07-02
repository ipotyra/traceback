# Traceback

Traceback is a platform that allows women to report locations where they felt unsafe on the street. These reports build a real, collective map that helps other women make more conscious choices about where they walk.

## Motivation

Women often notice signs of danger or discomfort in certain places, but have no useful way to share that with others. Traceback was created to fill that gap: turning individual experiences into collective information, building not just a safety tool, but also a space to be heard and to support one another.

## Goals

- Allow women to report locations where they felt unsafe
- Generate a real, collective map of perceived risk areas
- Give visibility and voice to experiences that often go unnoticed
- Strengthen a network of care and mutual support among women

## Tech stack

- HTML5
- CSS3
- PHP

## Project structure

```
traceback/
├── css/          # Site styles
├── imagens/      # Images used in the interface
├── php/          # Backend PHP scripts
├── about_us.html # About the project
├── help.html     # Help page
├── index.html    # Home page
├── login.php     # User authentication
└── report.html   # Page to submit a report
```

## Running locally

1. Install a local server with PHP support, such as [XAMPP](https://www.apachefriends.org/) or [WAMP](https://www.wampserver.com/)
2. Clone this repository inside the `htdocs` folder (XAMPP) or equivalent:
   ```bash
   git clone https://github.com/ipotyra/traceback.git
   ```
3. Start Apache (and MySQL, if the project uses a database) from the XAMPP/WAMP control panel
4. Open `http://traceback.local/index.html` in your browser

> If the project uses a database, configure your credentials in a local, non-versioned file. Detailed setup instructions will be added here soon.

## Project status

Work in progress — this is a personal project currently under development, built both as a learning experience and to create real social impact.

## Contributing

Suggestions, feedback, and ideas are very welcome! Feel free to open an issue.

## License

No license has been defined for this project yet.
