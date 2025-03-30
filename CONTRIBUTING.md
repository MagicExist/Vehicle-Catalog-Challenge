
# 📝 Contributing Guidelines

Thank you for considering contributing to this project! 🚀 This guide outlines the contribution process and the GitFlow workflow we follow.

## 📌 GitFlow Workflow

We follow the GitFlow branching model to ensure a structured and efficient development process.

### 🔹 Main Branches

main → Contains production-ready code.

develop → Active development branch, where all new features are merged before going to main.

### 🔹 Supporting Branches

feature/{feature-name} → Used for developing new features. Merges into develop.

bugfix/{issue-name} → Fixes for issues found in develop before release. Merges into develop.

hotfix/{fix-name} → Critical fixes for main. Merges into both main and develop.

release/{version} → Prepares a new version for production. Merges into main and develop.


## 🔄 Contribution Process

### 1⃣ Fork & Clone the Repository

git clone https://github.com/your-username/your-repo.git
cd your-repo

### 2⃣ Create a Feature Branch

git checkout -b feature/{short-description}

### 3⃣ Commit Changes (Conventional Commits)

### 📌Example
```bash
docs(readme): add repository structure section
```

### 💚 Commit Message Format:

feat: → New feature

fix: → Bug fix

docs: → Documentation updates

chore: → Maintenance tasks

### 4⃣ Push and Create a Pull Request (PR)

- git push origin feature/{short-description}

- Open a PR against the develop branch.

- Follow the PR template and provide a clear description.

- Wait for review and approval.

### 5⃣ Merging Guidelines

Feature & Bugfix branches → develop

Release branches → main & develop

Hotfix branches → main & develop

### 📝 Code Style & Best Practices

- Follow project-specific coding conventions.

- Keep pull requests small & focused.

- Write meaningful commit messages.

- Run tests before submitting a PR.

🦝 Need Help?

If you have any questions, feel free to open an issue or ask in discussions.

Happy coding! 🚀✨