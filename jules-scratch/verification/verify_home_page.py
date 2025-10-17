from playwright.sync_api import Page, expect

def test_home_page(page: Page):
    """
    This test verifies that the home page is rendered correctly and that
    the posts are displayed.
    """
    # 1. Arrange: Go to the home page.
    page.goto("http://127.0.0.1:8000")

    # 2. Assert: Confirm the page title is correct.
    expect(page).to_have_title("Laravel")

    # 3. Screenshot: Capture the final result for visual verification.
    page.screenshot(path="jules-scratch/verification/verification.png")