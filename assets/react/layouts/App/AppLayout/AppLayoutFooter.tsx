/**
 * @license EUPL-1.2+
 * Copyright Gemeente Amsterdam
 */

import { Heading, PageFooter } from "@amsterdam/design-system-react";

export const AppFooter = () => {
  return (
    <PageFooter>
      <Heading key={2} className="ams-visually-hidden" level={2}>
        Over deze website
      </Heading>

      <PageFooter.Menu key={3}>
        <PageFooter.MenuLink href="#">Over deze site</PageFooter.MenuLink>
        <PageFooter.MenuLink href="#">Privacy</PageFooter.MenuLink>
        <PageFooter.MenuLink href="#">Cookies</PageFooter.MenuLink>
      </PageFooter.Menu>
    </PageFooter>
  );
};

AppFooter.displayName = "AppLayout.Footer";
