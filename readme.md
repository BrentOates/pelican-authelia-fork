<img width="20%" src="https://raw.githubusercontent.com/pelican-dev/panel/main/public/pelican.svg" alt="logo">

> [!NOTE]
> This fork will mostly just follow upstream with some minor tweaks:
> - Implements Authelia as an OIDC Provider from Closed PR (https://github.com/pelican-dev/panel/pull/1084)
> - Disables logging of user passwords to activity feed on bad login attempt ([#5d3040f](https://github.com/BrentOates/pelican-authelia-fork/commit/5d3040f4cd7ce7edaa91f7616577c6af26d321fe))
> - Provides Sqlite executable in the Docker image for ease of access to the database when not using MySQL/PGSQL ([#9af0f01](https://github.com/BrentOates/pelican-authelia-fork/commit/9af0f0157ee15487e4a68dde43488f2eff6fec84))
> - Dev Container setup for use in GitHub Codespaces

# Pelican Panel

![Total Downloads](https://img.shields.io/github/downloads/pelican-dev/panel/total?style=flat&label=Total%20Downloads&labelColor=rgba(0%2C%2070%2C%20114%2C%201)&color=rgba(255%2C%20255%2C%20255%2C%201)) 
![Latest Release](https://img.shields.io/github/v/release/pelican-dev/panel?style=flat&label=Latest%20Release&labelColor=rgba(0%2C%2070%2C%20114%2C%201)&color=rgba(255%2C%20255%2C%20255%2C%201))  

Pelican Panel is an open-source, web-based application designed for easy management of game servers.
It offers a user-friendly interface for deploying, configuring, and managing servers, with features like real-time resource monitoring, Docker container isolation, and extensive customization options.
Ideal for both individual gamers and hosting companies, it simplifies server administration without requiring deep technical knowledge.

Fly High, Game On: Pelican's pledge for unrivaled game servers.

## Links

* [Website](https://pelican.dev)
* [Docs](https://pelican.dev/docs)
* [Discord](https://discord.gg/pelican-panel)
* [Wings](https://github.com/pelican-dev/wings)

## Supported Games and Servers

Pelican supports a wide variety of games by utilizing Docker containers to isolate each instance.
This gives you the power to run game servers without bloating machines with a host of additional dependencies.

Some of our popular eggs include:

| Category                                                             | Eggs            |               |                    |                |
|----------------------------------------------------------------------|-----------------|---------------|--------------------|----------------|
| [Minecraft](https://github.com/pelican-eggs/minecraft)               | Paper           | Sponge        | Bungeecord         | Waterfall      |
| [SteamCMD](https://github.com/pelican-eggs/steamcmd)                 | 7 Days to Die   | ARK: Survival | Arma 3             | Counter Strike |
|                                                                      | DayZ            | Enshrouded    | Left 4 Dead        | Palworld       |
|                                                                      | Project Zomboid | Satisfactory  | Sons of the Forest | Starbound      |
| [Standalone Games](https://github.com/pelican-eggs/games-standalone) | Among Us        | Factorio      | FTL                | GTA            |
|                                                                      | Kerbal Space    | Mindustry     | Rimworld           | Terraria       |
| [Discord Bots](https://github.com/pelican-eggs/chatbots)             | Redbot          | JMusicBot     | Dynamica           |                |
| [Voice Servers](https://github.com/pelican-eggs/voice)               | Mumble          | Teamspeak     | Lavalink           |                |
| [Software](https://github.com/pelican-eggs/software)                 | Elasticsearch   | Gitea         | Grafana            | RabbitMQ       |
| [Programming](https://github.com/pelican-eggs/generic)               | Node.js         | Python        | Java               | C#             |
| [Databases](https://github.com/pelican-eggs/database)                | Redis           | MariaDB       | PostgreSQL         | MongoDB        |
| [Storage](https://github.com/pelican-eggs/storage)                   | S3              | SFTP Share    |                    |                |
| [Monitoring](https://github.com/pelican-eggs/monitoring)             | Prometheus      | Loki          |                    |                |

## Repository Activity
![Stats](https://repobeats.axiom.co/api/embed/4d8cc7012b325141e6fae9c34a22b3669ad5753b.svg "Repobeats analytics image")

*Copyright Pelican® 2024-2025*
