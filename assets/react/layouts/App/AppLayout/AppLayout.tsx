/**
 * @license EUPL-1.2+
 * Copyright Gemeente Amsterdam
 */

import { type ForwardedRef, forwardRef, type HTMLAttributes, type PropsWithChildren, useImperativeHandle, useRef, useState } from "react";

import { Grid, Icon, PageFooter, PageHeader, Row, SkipLink } from "@amsterdam/design-system-react";
import { BuildingsFillIcon, ClipboardFillIcon, DocumentEuroFillIcon, HouseCanalFillIcon, LogInIcon, PersonFillIcon, QuestionMarkCircleFillIcon, SuitcaseFillIcon } from "@amsterdam/design-system-react-icons";

import clsx from "clsx";
import { AppNavigation } from "../AppNavigation";
import { AppLayoutContext } from "./AppLayoutContext";
import { AppLayoutHeader } from "./AppLayoutHeader";

import styles from "./AppLayout.module.css?module";

export type AppLayoutProps = PropsWithChildren<HTMLAttributes<HTMLDivElement>>;

export const AppLayoutRoot = forwardRef(
  (
    { children, className, ...restProps }: AppLayoutProps,
    ref: ForwardedRef<HTMLDivElement>,
  ) => {
    const location = globalThis.window.location;

    const innerRef = useRef<HTMLDivElement>(null);
    const [appNavigationOpen, setAppNavigationOpen] = useState(false);

    // Use a passed ref if it's there, otherwise use innerRef.
    useImperativeHandle(ref, () => innerRef.current as HTMLDivElement);

    return (
      <AppLayoutContext.Provider value={{ appNavigationOpen, setAppNavigationOpen }}>
        <div
          {...restProps}
          ref={innerRef}
          className={clsx(
            styles.app,
            className,
          )}
        >
          <SkipLink className={styles.skiplink} href="#content">Direct naar inhoud</SkipLink>

          <AppLayoutHeader
            appName="Schulddossier"
            appNavigation={
              <PageHeader.MenuLink fixed={true} href="/gebruiker" lang="en" rel="external">
                <Row gap="small">
                  Inloggen
                  <Icon size="heading-3" svg={LogInIcon} />
                </Row>
              </PageHeader.MenuLink>
            }
          />

          <AppNavigation aria-label="Main" className={styles.navigation}>
            <AppNavigation.Link
              key="dossiers"
              active={location.pathname === "/"}
              href="/"
              icon={SuitcaseFillIcon}
              label="Dossiers"
            />
            <AppNavigation.Link
              key="schuldeisers"
              href="/"
              icon={DocumentEuroFillIcon}
              label="Schuldeisers"
            />
            <AppNavigation.Link
              key="organisaties"
              href="/"
              icon={HouseCanalFillIcon}
              label="Organisaties"
            />
            <AppNavigation.Link
              key="teams"
              href="/"
              icon={BuildingsFillIcon}
              label="Teams"
            />
            <AppNavigation.Link
              key="gebruikers"
              href="/"
              icon={PersonFillIcon}
              label="Gebruikers"
            />
            <AppNavigation.Link
              key="versies"
              href="/"
              icon={ClipboardFillIcon}
              label="Versies"
            />
            <AppNavigation.Link
              key="help"
              href="/"
              icon={QuestionMarkCircleFillIcon}
              label="Help"
            />
          </AppNavigation>

          <Grid id="content" as="main" className={styles.content} paddingVertical="large">
            {children}
          </Grid>

          <PageFooter>
            <PageFooter.Menu>
              <PageFooter.MenuLink href="#">Over deze site</PageFooter.MenuLink>
              <PageFooter.MenuLink href="#">Help</PageFooter.MenuLink>
            </PageFooter.Menu>
          </PageFooter>
        </div>
      </AppLayoutContext.Provider>
    );
  },
);

AppLayoutRoot.displayName = "AppLayout";

export const AppLayout = AppLayoutRoot;
