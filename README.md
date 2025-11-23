# 🌊 POS_System GitFlow Branching Strategy

> **Modern Development Workflow for Scalable Teams**

![Version](https://img.shields.io/badge/version-1.0-blue.svg) ![GitFlow](https://img.shields.io/badge/workflow-GitFlow-orange.svg) ![Conventional Commits](https://img.shields.io/badge/commits-conventional-green.svg)

*Every commit tells a story. Let's make it a good one.*

---

## 🎯 Philosophy

This project embraces **GitFlow** to maintain clean, predictable, and scalable development. Every branch has a purpose. Every merge tells a story. Every contributor follows the same north star.

> **Golden Rule**: If you're committing directly to `main` or `develop`, you're doing it wrong.

---

## 🏗️ Architecture Overview

```
                    ┌─────────────┐
                    │    main     │  ← Production releases only
                    └──────┬──────┘
                           │
                    ┌──────▼──────┐
                    │   develop   │  ← Integration branch
                    └──────┬──────┘
                           │
        ┌──────────────────┼──────────────────┐
        │                  │                  │
   ┌────▼────┐       ┌─────▼───┐       ┌──────▼──┐
   │ feature │       │ bugfix  │       │ release │
   └─────────┘       └─────────┘       └─────────┘
```

---

## 🔱 Branch Types

### 🟦 `main` — The Sacred Ground

**Purpose**: Production environment. Every commit = stable release.

**Lifetime**: Permanent ♾️

**Protection Rules**:
- ✅ Requires Tech Lead approval
- ✅ CI must pass
- ❌ No direct commits

**Accepts merges from**: `release/*` `hotfix/*`

---

### 🟪 `develop` — The Integration Hub

**Purpose**: Pre-production environment. Latest completed features live here.

**Lifetime**: Permanent ♾️

**Protection Rules**:
- ✅ PR required
- ✅ Code review mandatory
- ❌ No direct commits

**Accepts merges from**: `feature/*` `bugfix/*` `release/*` `hotfix/*`

---

### 🟩 `feature/*` — Innovation Happens Here

**Purpose**: New features and enhancements. One ticket = one branch.

**Naming Convention**:
```
feature/QLP-42-user-authentication
feature/QLP-150-dark-mode
feature/QLP-89-payment-gateway
```

**Branch from**: `develop`  
**Merge to**: `develop`  
**Lifetime**: Short-lived ⏱️ (delete after merge)

**✨ Best Practices**
- Keep features small and focused
- Update from `develop` regularly
- Open PR only when 100% complete
- Include tests before merging

---

### 🟧 `bugfix/*` — The Cleanup Crew

**Purpose**: Non-critical bugs found during development.

**Naming Convention**:
```
bugfix/QLP-55-auth-token-validation
bugfix/QLP-67-incorrect-date-format
```

**Branch from**: `develop`  
**Merge to**: `develop`  
**Lifetime**: Short-lived ⏱️

**Requirements**:
- ✅ PR required
- ✅ At least one reviewer
- ✅ Must include test coverage

---

### 🟨 `release/*` — Preparing for Launch

**Purpose**: Final preparation before production. Version bumps, testing, minor fixes.

**Naming Convention**:
```
release/v1.0
release/v1.2.5
release/v2.0-beta
```

**Branch from**: `develop`  
**Merge to**: `main` + `develop`  
**Lifetime**: Short-lived ⏱️

**Workflow**:
1. Branch from `develop` when ready for release
2. Perform final testing and bug fixes
3. Bump version numbers
4. Merge to `main` (triggers production)
5. Merge back to `develop` (keeps it in sync)

**Protection Rules**:
- ✅ PR required for both merges
- ✅ CI must pass
- ✅ QA sign-off required

---

### 🟥 `hotfix/*` — Emergency Response

**Purpose**: Critical production bugs that can't wait for the next release.

**Naming Convention**:
```
hotfix/critical-auth-bypass
hotfix/v1.0.1-security-patch
hotfix/payment-failure-fix
```

**Branch from**: `main` ⚠️  
**Merge to**: `main` + `develop`  
**Lifetime**: Very short-lived ⚡

**Priority**: 🔴 **HIGH PRIORITY**

**Workflow**:
1. Branch directly from `main`
2. Fix the issue quickly
3. Test thoroughly
4. Merge to `main` immediately
5. Merge to `develop` to keep it synchronized

---

## 🔄 Pull Request Workflow

### Step-by-Step Guide

#### 1️⃣ **Push Your Branch**
```bash
git push origin feature/QLP-42-new-feature
```

#### 2️⃣ **Open a PR**
Use the PR template (see below)

#### 3️⃣ **Title Format**
```
QLP-XX: Brief description of changes
```

**Examples**:
```
QLP-42: Add user authentication with JWT
QLP-150: Implement dark mode toggle
QLP-67: Fix date formatting in reports
```

#### 4️⃣ **Add Reviewers**
Assign at least one team member

#### 5️⃣ **Pre-Merge Checklist**
- ✅ CI passes
- ✅ Code reviewed and approved
- ✅ No merge conflicts
- ✅ Tests included
- ✅ Documentation updated

---

### 🎭 Merge Strategies

| Branch Type | Merge Strategy | Reason |
|------------|----------------|--------|
| `feature/*` → `develop` | **Squash & Merge** | Clean history, one commit per feature |
| `bugfix/*` → `develop` | **Squash & Merge** | Consolidated fix in one commit |
| `release/*` → `main` | **Merge Commit** | Preserve release history |
| `release/*` → `develop` | **Merge Commit** | Maintain traceability |
| `hotfix/*` → `main` | **Merge Commit** | Critical fix visibility |

❌ **Never use**: Fast-forward merges

---

## 📝 Commit Message Format

We follow **Conventional Commits** specification:

### Format
```
<type>(<scope>): <description>

[optional body]

[optional footer]
```

### Types

| Type | Description | Example |
|------|-------------|---------|
| `feat` | New feature | `feat: add user login endpoint` |
| `fix` | Bug fix | `fix: resolve null pointer in auth` |
| `docs` | Documentation | `docs: update API documentation` |
| `style` | Formatting changes | `style: format code with prettier` |
| `refactor` | Code refactoring | `refactor: simplify user service logic` |
| `test` | Adding tests | `test: add unit tests for auth module` |
| `chore` | Maintenance | `chore: update dependencies` |
| `perf` | Performance | `perf: optimize database queries` |

### Examples

```bash
feat(auth): implement JWT token refresh mechanism

fix(api): correct validation error in user registration
Closes QLP-55

docs: add GitFlow branching strategy guide

chore(deps): upgrade React to v18.2.0
```

---

## 🔗 Smart Commits (Jira Integration)

Link commits to Jira automatically:

### Format
```
QLP-XX <type>: description
```

### Examples
```bash
git commit -m "QLP-42 feat: add OAuth2 authentication"
git commit -m "QLP-150 fix: correct theme switching bug"
git commit -m "QLP-89 docs: update README with setup instructions"
```

**Benefits**:
- ✅ Automatic Jira ticket updates
- ✅ Traceability from code to requirements
- ✅ Better project visibility

---

## 🧪 Pre-PR Checklist

Before opening a pull request, ensure:

```bash
# Run tests
npm test

# Run linter
npm run lint

# Build the project
npm run build

# Check for type errors (if TypeScript)
npm run type-check
```

**Verify**:
- ✅ All tests pass
- ✅ No linting errors
- ✅ Build succeeds
- ✅ No console errors/warnings
- ✅ Code formatted properly
- ✅ Documentation updated

---

## 🚀 Quick Reference Commands

### Starting a New Feature
```bash
git checkout develop
git pull origin develop
git checkout -b feature/QLP-42-new-feature
```

### Updating Your Branch
```bash
git checkout develop
git pull origin develop
git checkout feature/QLP-42-new-feature
git merge develop
```

### Creating a Release
```bash
git checkout develop
git pull origin develop
git checkout -b release/v1.0
# Make final changes
git commit -m "chore: bump version to 1.0"
```

### Emergency Hotfix
```bash
git checkout main
git pull origin main
git checkout -b hotfix/critical-security-fix
# Fix the issue
git commit -m "fix: patch security vulnerability"
```

---

## 📋 Pull Request Template

Copy this template when creating PRs:

```markdown
# 🛠 Pull Request – QLP-XX: Short Description

## 📌 Jira Ticket
**Link**: [QLP-XX](https://jira.company.com/browse/QLP-XX)

---

## 📄 Description
Briefly explain what this PR does, why it's needed, and any relevant context.

---

## ✅ Type of Change
- [ ] 🚀 New feature
- [ ] 🐛 Bug fix
- [ ] 📝 Documentation update
- [ ] ♻️ Refactoring
- [ ] ⚡ Performance improvement
- [ ] 🧪 Test coverage
- [ ] 🔧 Configuration change

---

## 🧪 How to Test
Provide clear steps for reviewers:

1. Checkout this branch
2. Run `npm install`
3. Start the server with `npm run dev`
4. Navigate to `/login`
5. Verify authentication flow works

---

## 💻 Screenshots / Evidence
*Add screenshots, logs, or API response examples if applicable*

---

## 📦 Impacted Areas
List affected modules, components, or services:
- Auth module
- User service
- Login component
- API routes

---

## ✔ Checklist
- [ ] PR title includes Jira ticket (e.g., `QLP-45: Add login`)
- [ ] Code compiles without errors
- [ ] All tests pass locally
- [ ] No linting errors
- [ ] Documentation updated
- [ ] No merge conflicts
- [ ] Reviewer(s) assigned
- [ ] Self-reviewed the code

---

## 🔍 Additional Notes
*Any extra context, concerns, or implementation details*

---

## 📚 Related PRs
*Link any related or dependent PRs*
```

---

## 🎯 Best Practices

### ✨ Do's

- ✅ **Keep branches short-lived** — Merge within 2-3 days
- ✅ **Write descriptive commit messages** — Future you will thank you
- ✅ **Review your own PR first** — Catch obvious issues
- ✅ **Keep PRs small** — Aim for <400 lines changed
- ✅ **Update documentation** — Code without docs is incomplete
- ✅ **Add tests** — No feature is complete without tests
- ✅ **Communicate** — Tag relevant team members

### ❌ Don'ts

- ❌ **Don't commit directly to `main` or `develop`** — Always use PRs
- ❌ **Don't merge without approval** — Code review is mandatory
- ❌ **Don't leave branches stale** — Delete after merging
- ❌ **Don't mix concerns** — One feature/fix per branch
- ❌ **Don't skip CI checks** — If it's red, don't merge
- ❌ **Don't force push to shared branches** — Respect others' work

---

## 🆘 Troubleshooting

### Merge Conflicts
```bash
git checkout develop
git pull origin develop
git checkout feature/QLP-42-your-feature
git merge develop
# Resolve conflicts
git add .
git commit
```

### Accidentally Committed to Wrong Branch
```bash
# If not pushed yet
git reset --soft HEAD~1
git stash
git checkout correct-branch
git stash pop
git add .
git commit
```

### Need to Update PR After Review
```bash
# Make changes
git add .
git commit -m "fix: address review comments"
git push origin feature/QLP-42-your-feature
```

---

## 🎓 Resources

- [GitFlow Original Proposal](https://nvie.com/posts/a-successful-git-branching-model/)
- [Conventional Commits Specification](https://www.conventionalcommits.org/)
- [GitHub Flow Guide](https://guides.github.com/introduction/flow/)
- [Semantic Versioning](https://semver.org/)

---

## 📞 Need Help?

- **Git Issues**: Contact the Tech Lead
- **Process Questions**: Check team wiki or ask in #dev-help
- **PR Reviews**: Tag `@reviewers` in Slack

---

> **Remember**: A clean Git history is a gift to your future self and your teammates. 🎁

**Last Updated**: 2025  
**Version**: 1.0  
**Maintained by**: Tech Lead