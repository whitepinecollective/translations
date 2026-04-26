# Getting Started: Translating PluralSpace

**No coding or GitHub experience needed.** We'll walk you through everything step-by-step.

---

## What You'll Be Doing

You'll be translating PluralSpace into your language. That means:

- Reading English text from our app (like "Help Center," "Search articles," "Members")
- Writing the same meaning in your language
- Open a PR with your translation

That's it! Think of it like translating a menu or an instruction booklet.

---
**NOTE:** If you do not want to create a Github account, you can also submit translations via Discord.
Just join our Discord and post in the #translations channel.

## Step 1: Tell Us You Want to Help

Open an issue on GitHub and let us know you want to translate. Don't worry if you're new to GitHub — we'll walk you through it.

### How to Open an Issue

1. Go to: **https://github.com/PluralSpace/translations**
2. Click the green **"Sign up"** button in the top right (if you don't have an account)
3. Fill in your email, create a username, and a password
4. Verify your email (GitHub will send you a link)
5. Come back to https://github.com/PluralSpace/translations
6. Click **"Issues"** (in the tabs near the top)
7. Click the green **"New issue"** button
8. Write something like:

   ```
   Title: Translation to [Language]
   ```

9. Click **"Submit new issue"**

Done! That just lets us keep track of what is being translated, and allow other people to join in to help.

---

## Step 2: Fork the Repo

A fork is a way to clone the repo to your account so you can modify it.

1. Go to the main page of the repo: https://github.com/PluralSpace/translations
2. Click the **"Fork"** button in the top right
3. This will create a copy of the repo in your GitHub account. You can make changes to this copy without affecting the original until you're ready to submit a PR.
4. After forking, you'll be taken to your copy (it will say "your-username/translations" at the top). This is where you'll do your translation work.
---

## Step 3: Translate!

### Using Github's Web Editor
1. Go to your forked repo that you just created (it will be on your profile page if you were not redirected)
2. Press the `.` key on your keyboard in your forked repo. This will open GitHub's web-based code editor.
3. Copy the `en/` folder and paste it in the same directory. Rename the new folder to the language code you're translating to (e.g., `fr` for French, `es` for Spanish).
4. Click on a file in your new folder (e.g., `kb.php`) to open it.
5. Edit the right side of each line to translate the text into your language.
6. Once you're done, it's time to commit the changes! Click on the icon that looks like a line with a branch coming off of it.
![commit-example.png](images/commit-example.png)
7. Enter a message, like "Adding French Translations"
8. Click the green "Commit & Push" button at the bottom of the page to save your translations to your forked repo.


### How to Translate

Open a file like `kb.php`. It looks like this:

```
'title' => 'Help Center',
'search' => 'Search',
'search_placeholder' => 'Search articles...',
```

**Only change the right side** (after the `=>`). The left side stays exactly the same.

**Example: English to Latin**

We give you:
```
'title' => 'Help Center',
'search' => 'Search',
```

You change it to:
```
'title' => 'Auxilium Center',
'search' => 'Investigatio',
```

If there is an apostrophe in a word, you should prefix it with a `\`, so for instance `It's` becomes `It\'s`.

---

## Step 4: Important Rules

### Rule 1: Don't Change the Left Side

```
'search_placeholder'           ← DON'T CHANGE THIS
=> 
'Search articles...'           ← CHANGE THIS PART
```

### Rule 2: Keep Special Words in Place

Sometimes you'll see `:name` or `:count`. **Don't translate these.** Just keep them where they are.

**Example:**

English:
```
'welcome' => 'Welcome, :name!'
```

Latin (you keep `:name` exactly as is):
```
'welcome' => 'Grata, :name!',
```

The `:name` is a placeholder the app fills in with the person's actual name.

### Rule 3: Don't Translate Certain Words

Never translate:
- **PluralSpace** (app name)
- **DID** (medical term)
- **OSDD** (medical term)

So if you see:
```
'about' => 'PluralSpace is for plural systems.',
```

Translate to:
```
'about' => 'PluralSpace est pro systematibus pluralibus.',
```

`PluralSpace` stays `PluralSpace` even in Latin.

### Rule 4: Match Punctuation

If English has a period, your translation should too.

```
English: 'error' => 'Something went wrong.'
Latin:  'error' => 'Aliquid abiit iniuriam.',
```

### Pluralization

If you see something like this:
```
'items' => '{0} No items|{1} One item|[2,*] :count items',
```
This means:
- If there are 0 items, it will show "No items"
- If there is 1 item, it will show "One item"
- If there are 2 or more items, it will show ":count items" (where `:count` is replaced with the actual number)

When translating, you need to keep the same structure. So if your language has different 
pluralization rules, you can adjust it accordingly, but make sure to keep the `{0}`, `{1}`, and `[2,*]` parts intact.


---

## Step 5: Open a Pull Request

1. After committing, you can open a Pull Request to submit your translation for review.
    - Go to the "Pull requests" tab in your forked repo.
    - Click the green "New pull request" button.
    - Make sure the base repository is `PluralSpace/translations` and the base branch is `main`.
    - Add a title and description for your pull request (e.g., "Spanish Translation").
    - Click "Create pull request" to submit it.
2. We'll review your translation and merge it if everything looks good!

---

## Step 6: We Review & Thank You

That's it! You're done. We'll:

1. Check that your translation makes sense
2. Maybe ask a quick clarification question (optional)
3. Add it to PluralSpace
4. Credit you as the translator (if you want)
5. Say thank you! 💜

---

## Real Example: Start to Finish

Let's say you want to translate to Spanish:

**You comment:** "I want to translate PluralSpace to Spanish! I'm a native speaker."

**You fork the repo, copy the `en` folder to `es`, and start translating.**

**You open a PR with your translation.**

**We review it, and will ask questions if needed.**

**We merge it, and credit you as the translator.**

---

## FAQ: Questions People Ask

### "I don't speak perfect English. Is that okay?"

100% yes! As long as you're fluent speaker of your language, that's all that matters. We can help with English context.

### "Can I translate just part of it?"

Absolutely. Even if you only translate 20 phrases, that's helpful. Others can finish later.

### "What if I'm not sure what something means?"

Comment on your GitHub issue and ask, post in our Discord, someone will be happy to lend a hand or explain anything.

### "Do I need to know about computers?"

Nope. Just:
- Open and edit a text file
- Copy it
- Paste it into a GitHub comment

That's it.

### "Can I help with a language that's already started?"

Yes! If French is 50% done and you want to finish it, comment on the existing issue and jump in.

### "How long does this take?"

Depends on the size. A small file (20 phrases) might take 30 minutes. A big one could be a few hours. **There's no rush.**

### "What if I make a mistake?"

No problem! We review everything before it goes live. If there's a typo or something doesn't sound right, we'll ask about it, and you can fix it.

### "Do you pay translators?"

Not right now, but we credit all translators in the app. Your name appears as someone who made PluralSpace accessible to your community.

### "Can I just edit the files directly in my fork and then make a PR?"

Yes! You can skip the web editor entirely if you prefer:
1. Fork the repo
2. Use whatever text editor you like (Notepad, VS Code, etc.) to edit files locally
3. Upload them to your fork using GitHub's web interface or Git
4. Open a PR

Pick whatever method is easiest for you!

---

## Words You'll See: Quick Glossary

Here are common PluralSpace words you'll translate. We define them so you know what they mean:

**Member** - A person/identity in a system. Not "alter" or "piece" (those sound cold). Use the word for "person" in your language.

**Front** - Who's in control right now. "Who's fronting?" = "Who's in control?"

**System** - A person with plurality (DID, OSDD, etc.).

**Switching** - When control shifts from one member to another.

**Headmate** - A friendly word for a system member. Like "friend" but within a system.

**Co-con** - When multiple members are aware and present at the same time.

**Journal** - Personal notes or diary entries.

**Thoughts** - Individual member notes (different from Journal, which is system-wide).

---

## Still Confused?

Don't worry. Here's what to do:

1. **Comment on your GitHub issue:** "I'm stuck on [specific thing]. Can someone help?"
2. **Join our Discord:** https://discord.gg/pluralspace (we have a #translations channel)

We **want** to help. There are no stupid questions.

---

## Ready to Get Started?

### Next Steps:

1. Go to: **https://github.com/PluralSpace/translations**
2. Click **Issues**
3. Click **New issue**
4. Write: "I want to translate PluralSpace to [your language]!"
5. Hit submit
6. Fork the repo
7. Start translating!

---

**Thank you for helping make PluralSpace accessible to plural systems everywhere.** 💜

---

## Need Help?

- **Questions?** Open an issue on GitHub
- **Want to chat?** Join our Discord: https://discord.gg/pluralspace

We're here to help.
