print("Script started.")
from playwright.sync_api import sync_playwright
print("Playwright imported.")

with sync_playwright() as p:
    print("Playwright started.")
    browser = p.chromium.launch()
    print("Browser launched.")
    page = browser.new_page()
    print("Page created.")
    page.goto("https://www.google.com")
    print("Navigated to Google.")
    page.screenshot(path="jules-scratch/verification/google.png")
    print("Screenshot taken.")
    browser.close()
    print("Browser closed.")

print("Script finished.")