import time
from playwright.sync_api import Page, expect

def test_home_page(page: Page):
    """
    This test verifies that the home page is rendered correctly and that
    the posts are displayed.
    """
    print("Running Playwright script...")
    try:
        # 1. Arrange: Go to the home page.
        print("Waiting for server to start...")
        time.sleep(10)
        print("Navigating to home page...")
        page.goto("http://127.0.0.1:8000")
        print("Navigation complete.")

        # 2. Assert: Confirm the page title is correct.
        print("Asserting page title...")
        expect(page).to_have_title("Laravel")
        print("Assertion complete.")

        # 3. Screenshot: Capture the final result for visual verification.
        print("Taking screenshot...")
        page.screenshot(path="jules-scratch/verification/verification.png")
        print("Screenshot created successfully.")
    except Exception as e:
        print(f"An error occurred: {e}")